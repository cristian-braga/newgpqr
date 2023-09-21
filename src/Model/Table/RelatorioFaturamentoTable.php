<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Datasource\ConnectionManager;

class RelatorioFaturamentoTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('expedicao');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Atividade', [
            'foreignKey' => 'atividade_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('StatusAtividade', [
            'foreignKey' => 'status_atividade_id',
            'joinType' => 'INNER',
        ]);
    }

    public function queryFaturamento($data_inicio = NULL, $data_fim = NULL)
    {
        $connection = ConnectionManager::get('default');

        $query = "
            SELECT
                cliente_responsavel_servico AS cliente,
                cliente_servico AS cliente_servico,
                nome_servico AS servico,
                descricao_servico AS descricao,
                impressao_servico AS impressao,
                tipo_preparo_servico AS preparo,
                quantidade_documentos AS documentos,
                quantidade_folhas AS folhas
            FROM expedicao
                INNER JOIN atividade ON expedicao.atividade_id = atividade.id
                INNER JOIN servico ON atividade.servico_id = servico.id
            WHERE cliente_servico LIKE 'DEER%'
        ";

        if (isset($data_inicio) && $data_inicio != '') {
            $query .= "AND data_expedicao >= '{$data_inicio}'";
        }

        if (isset($data_fim) && $data_fim != '') {
            $query .= "AND data_expedicao <= '{$data_fim}'";
        }

        $query .= "
            GROUP BY servico
            ORDER BY cliente ASC, servico ASC
        ";

        $query = $connection->execute($query)->fetchAll('assoc');

        return $query;
    }
}
