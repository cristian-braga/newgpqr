<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Datasource\ConnectionManager;

class RelatorioClienteTable extends Table
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

    public function clientes()
    {
        $query = $this->find('list', ['keyField' => 'clientes', 'valueField' => 'clientes'])
            ->select([
                'clientes' => 'cliente_servico'
            ])
            ->innerJoinWith('Atividade')
            ->innerJoinWith('Atividade.Servico')
            ->where([
                'descricao_servico LIKE' => 'Multas%'
            ])
            ->group('clientes')
            ->orderAsc('clientes')
            ->all();

        return $query;
    }

    public function queryMultasPorCliente($cliente = NULL)
    {
        $connection = ConnectionManager::get('default');

        $query = "
            SELECT
                cliente_servico AS cliente,
                SUM(CASE WHEN YEAR(data_expedicao) = YEAR(CURDATE()) - 2 THEN quantidade_documentos ELSE 0 END) AS ano_retrasado,
                SUM(CASE WHEN YEAR(data_expedicao) = YEAR(CURDATE()) - 1 THEN quantidade_documentos ELSE 0 END) AS ano_passado,
                SUM(CASE WHEN YEAR(data_expedicao) = YEAR(CURDATE()) THEN quantidade_documentos ELSE 0 END) AS ano_atual
            FROM expedicao
                INNER JOIN atividade ON expedicao.atividade_id = atividade.id
                INNER JOIN servico ON atividade.servico_id = servico.id
            WHERE descricao_servico LIKE 'Multas%'
        ";

        if (isset($cliente)) {
            $query .= "AND cliente_servico = '{$cliente}'";
        }

        $query .= "
            GROUP BY cliente
            ORDER BY cliente ASC
        ";

        $query = $connection->execute($query)->fetchAll('assoc');

        return $query;
    }
}