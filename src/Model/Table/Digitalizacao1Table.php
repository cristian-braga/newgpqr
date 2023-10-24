<?php

declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Digitalizacao Model
 *
 * @property \App\Model\Table\ServicoTable&\Cake\ORM\Association\BelongsTo $Servico
 *
 * @method \App\Model\Entity\Digitalizacao newEmptyEntity()
 * @method \App\Model\Entity\Digitalizacao newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Digitalizacao[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Digitalizacao get($primaryKey, $options = [])
 * @method \App\Model\Entity\Digitalizacao findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Digitalizacao patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Digitalizacao[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Digitalizacao|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Digitalizacao saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Digitalizacao[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Digitalizacao[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Digitalizacao[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Digitalizacao[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */

class Digitalizacao1Table extends Table
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

        $this->setTable('digitalizacao1');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Servico', [
            'foreignKey' => 'servico_id',
            'joinType' => 'INNER',
        ]);
    }

    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->scalar('funcionario')
            ->maxLength('funcionario', 45)
            ->allowEmptyString('funcionario');

        $validator
            ->date('data_digitalizacao')
            ->allowEmptyDate('data_digitalizacao');

        $validator
            ->integer('quantidade_documentos')
            ->allowEmptyString('quantidade_documentos');

        $validator
            ->scalar('periodo')
            ->allowEmptyDate('periodo');

        $validator
            ->integer('servico_id')
            ->notEmptyString('servico_id');

        return $validator;
    }

    public function buildRules(RulesChecker $rules): RulesChecker
    {
        $rules->add($rules->existsIn('servico_id', 'Servico'), ['errorField' => 'servico_id']);

        return $rules;
    }

    public function selectServicos()
    {
        $servicos = $this->Servico
            ->find('list', ['keyField' => 'id', 'valueField' => 'nome_servico'])
            ->orderAsc('nome_servico')
            ->all();

        return $servicos;
    }

    // funçoes para os filtros da Digitalizacao
    public function funcionarioFiltro()
    {
        $query = $this->find('list', ['keyField' => 'funcionarios', 'valueField' => 'funcionarios']) 
            ->select([
                'funcionarios' => 'funcionario'
            ])
            ->group('funcionarios')
            ->orderAsc('funcionarios')
            ->all();

        return $query;
    }

    public function servicosFiltro()
    {
        $query = $this->find('list', ['keyField' => 'id', 'valueField' => 'servicos']) 
            ->select([
                'id' => 'Servico.id',
                'servicos' => 'Servico.nome_servico'
            ])
            ->innerJoinWith('Servico')
            ->group('servicos')
            ->orderAsc('servicos')
            ->all();

        return $query;
    }
}
