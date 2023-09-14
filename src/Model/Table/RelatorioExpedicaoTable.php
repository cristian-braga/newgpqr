<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;

class RelatorioExpedicaoTable extends Table
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

    public function queryExpedicao($data_inicio = NULL, $data_fim = NULL, $filtro_servico = NULL)
    {
        $query = $this->find()
            ->select([
                'nome_servico' => 'nome_servico',
                'data_expedicao' => 'data_expedicao',
                'remessa' => 'remessa_atividade',
                'descricao' => 'descricao_servico',
                'documentos' => 'quantidade_documentos'
            ])
            ->innerJoinWith('Atividade')
            ->innerJoinWith('Atividade.Servico')
            ->where([
                'RelatorioExpedicao.status_atividade_id IN' => [10, 12]
            ])
            ->order([
                'data_expedicao' => 'desc',
                'nome_servico' => 'asc'
            ]);

        if (isset($data_inicio) && $data_inicio != '') {
            $query->where([
                'RelatorioExpedicao.data_expedicao >=' => $data_inicio
            ]);
        }

        if (isset($data_fim) && $data_fim != '') {
            $query->where([
                'RelatorioExpedicao.data_expedicao <=' => $data_fim
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
