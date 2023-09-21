<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Datasource\ConnectionManager;

class RelatorioMensalTable extends Table
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

    public function queryComparativo()
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
            SUM(CASE WHEN YEAR(data_expedicao) = YEAR(CURDATE()) - 1 THEN quantidade_paginas ELSE 0 END) AS ano_passado,
            SUM(CASE WHEN YEAR(data_expedicao) = YEAR(CURDATE()) THEN quantidade_paginas ELSE 0 END) AS ano_atual
            FROM expedicao
                INNER JOIN atividade ON expedicao.atividade_id = atividade.id
                INNER JOIN servico ON atividade.servico_id = servico.id
            WHERE YEAR(data_expedicao) IN (YEAR(CURDATE()) - 1, YEAR(CURDATE()))
            GROUP BY mes
            ORDER BY mes ASC;"
        )->fetchAll('assoc');

        return $query;
    }

    public function queryProducao($ano)
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
            SUM(quantidade_documentos) AS quantidade_documentos,
            SUM(quantidade_folhas) AS quantidade_folhas,
            SUM(quantidade_paginas) AS quantidade_paginas
            FROM expedicao
                INNER JOIN atividade ON expedicao.atividade_id = atividade.id
                INNER JOIN servico ON atividade.servico_id = servico.id
            WHERE YEAR(data_expedicao) = {$ano}
            GROUP BY mes
            ORDER BY mes ASC;"
        )->fetchAll('assoc');

        return $query;
    }

    public function queryBoletim($data_inicio = NULL, $data_fim = NULL)
    {
        $query = $this->find()
            ->select([
                'cliente' => 'cliente_responsavel_servico',
                'cliente_servico' => 'cliente_servico',
                'impressao' => 'impressao_servico',
                'preparo' => 'tipo_preparo_servico',
                'servico' => 'nome_servico',
                'descricao' => 'descricao_servico',
                'documentos' => 'quantidade_documentos',
                'folhas' => 'quantidade_folhas',
                'paginas' => 'quantidade_paginas'
            ])
            ->innerJoinWith('Atividade')
            ->innerJoinWith('Atividade.Servico')
            ->order([
                'cliente' => 'ASC',
                'servico' => 'ASC'
            ]);

        if (isset($data_inicio) && $data_inicio != '') {
            $query->where([
                'data_expedicao >=' => $data_inicio
            ]);
        }

        if (isset($data_fim) && $data_fim != '') {
            $query->where([
                'data_expedicao <=' => $data_fim
            ]);
        }

        return $query;
    }
}
