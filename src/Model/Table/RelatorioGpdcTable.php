<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;

class RelatorioGpdcTable extends Table
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

    public function queryGpdc($data_inicio = NULL, $data_fim = NULL, $filtro_servico = NULL)
    {
        $query = $this->find()
            ->select([
                'nome_servico' => 'nome_servico',
                'cliente' => 'cliente_servico',
                'descricao' => 'descricao_servico',
                'codigo' => 'cod_sistema_servico',
                'documentos' => 'quantidade_documentos',
                'folhas' => 'quantidade_folhas'
            ])
            ->innerJoinWith('Atividade')
            ->innerJoinWith('Atividade.Servico')
            ->where([
                'RelatorioGpdc.status_atividade_id IN' => [10, 12]
            ])
            ->orderAsc('nome_servico');

        if (isset($data_inicio) && $data_inicio != '') {
            $query->where([
                'RelatorioGpdc.data_expedicao >=' => $data_inicio
            ]);
        }

        if (isset($data_fim) && $data_fim != '') {
            $query->where([
                'RelatorioGpdc.data_expedicao <=' => $data_fim
            ]);
        }

        if (isset($filtro_servico) && $filtro_servico != '') {
            $query->where([
                'Servico.id =' => $filtro_servico
            ]);
        }

        return $query;
    }

    public function servicos()
    {
        $query = $this->find('list', ['keyField' => 'id', 'valueField' => 'servicos'])
            ->select([
                'id' => 'Servico.id',
                'servicos' => 'Servico.nome_servico'
            ])
            ->innerJoinWith('Atividade')
            ->innerJoinWith('Atividade.Servico')
            ->group('Servico.nome_servico')
            ->orderAsc('Servico.nome_servico')
            ->all();

        return $query;
    }
}
