<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Datasource\ConnectionManager;

class RelatorioEnvelopamentoTable extends Table
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

        $this->setTable('envelopamento');
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

    public function queryEnvelopamento($ano)
    {
        $connection = ConnectionManager::get('default');

        $query = $connection->execute(
            "SELECT
            CASE MONTH(data_envelopamento)
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
            SUM(CASE WHEN envelopamento_servico = 'A4' THEN quantidade_documentos ELSE 0 END) AS total_A4,
            SUM(CASE WHEN envelopamento_servico = 'A5' THEN quantidade_documentos ELSE 0 END) AS total_A5,
            SUM(quantidade_documentos) AS total_mes
            FROM envelopamento
                INNER JOIN atividade ON envelopamento.atividade_id = atividade.id
                INNER JOIN servico ON atividade.servico_id = servico.id
            WHERE YEAR(data_envelopamento) = {$ano}
            GROUP BY mes, MONTH(data_envelopamento)
            ORDER BY MONTH(data_envelopamento) ASC;"
        )->fetchAll('assoc');

        return $query;
    }
}
