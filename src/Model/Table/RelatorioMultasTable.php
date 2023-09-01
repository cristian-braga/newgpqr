<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Datasource\ConnectionManager;

class RelatorioMultasTable extends Table
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

    public function queryMultas()
    {
        $connection = ConnectionManager::get('default');

        $query = $connection->execute(
            "SELECT
            CASE MONTH(data_expedicao)
                WHEN 1 THEN 'Janeiro'
                WHEN 2 THEN 'Fevereiro'
                WHEN 3 THEN 'Março'
                WHEN 4 THEN 'Abril'
                WHEN 5 THEN 'Maio'
                WHEN 6 THEN 'Junho'
                WHEN 7 THEN 'Julho'
                WHEN 8 THEN 'Agosto'
                WHEN 9 THEN 'Setembro'
                WHEN 10 THEN 'Outubro'
                WHEN 11 THEN 'Novembro'
                WHEN 12 THEN 'Dezembro'
            END as mes,
            SUM(CASE WHEN YEAR(data_expedicao) = YEAR(CURDATE()) - 2 THEN quantidade_documentos END) AS ano_retrasado,
            SUM(CASE WHEN YEAR(data_expedicao) = YEAR(CURDATE()) - 1 THEN quantidade_documentos END) AS ano_passado,
            SUM(CASE WHEN YEAR(data_expedicao) = YEAR(CURDATE()) THEN quantidade_documentos END) AS ano_atual
            FROM expedicao
                INNER JOIN atividade ON expedicao.atividade_id = atividade.id
                INNER JOIN servico ON atividade.servico_id = servico.id
            WHERE descricao_servico LIKE 'Multas%'
            GROUP BY mes, MONTH(data_expedicao)
            ORDER BY MONTH(data_expedicao) ASC;"
        )->fetchAll('assoc');

        return $query;
    }
}
