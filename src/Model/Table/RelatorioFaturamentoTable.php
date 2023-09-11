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

    public function queryFaturamento()
    {
        $connection = ConnectionManager::get('default');

        $query = $connection->execute(
            "SELECT
                cliente_servico AS cliente_servico,
                nome_servico AS nome_servico,
                descricao_servico AS descricao_servico,
                impressao_servico AS impressao_servico,
                tipo_preparo_servico AS tipo_preparo_servico,
                SUM(quantidade_documentos) AS total_docs,
                SUM(quantidade_folhas) AS total_folhas
            FROM expedicao
                INNER JOIN atividade ON expedicao.atividade_id = atividade.id
                INNER JOIN servico ON atividade.servico_id = servico.id
            WHERE
                cliente_servico LIKE 'DEER%'
            GROUP BY nome_servico
            ORDER BY cliente_servico ASC, nome_servico ASC"
        )->fetchAll('assoc');

        return $query;
    }
}
