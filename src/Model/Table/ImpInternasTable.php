<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ImpInternas Model
 *
 * @method \App\Model\Entity\ImpInterna newEmptyEntity()
 * @method \App\Model\Entity\ImpInterna newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\ImpInterna[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\ImpInterna get($primaryKey, $options = [])
 * @method \App\Model\Entity\ImpInterna findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\ImpInterna patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\ImpInterna[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\ImpInterna|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ImpInterna saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ImpInterna[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\ImpInterna[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\ImpInterna[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\ImpInterna[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class ImpInternasTable extends Table
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

        $this->setTable('imp_internas');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->scalar('descricao')
            ->maxLength('descricao', 60)
            ->requirePresence('descricao', 'create')
            ->notEmptyString('descricao');

        $validator
            ->integer('documentos')
            ->requirePresence('documentos', 'create')
            ->notEmptyString('documentos');

        $validator
            ->scalar('ocorrencia')
            ->maxLength('ocorrencia', 20)
            ->requirePresence('ocorrencia', 'create')
            ->notEmptyString('ocorrencia');

        $validator
            ->scalar('solicitante')
            ->maxLength('solicitante', 60)
            ->allowEmptyString('solicitante');

        $validator
            ->date('data_cadastro')
            ->requirePresence('data_cadastro', 'create')
            ->notEmptyDate('data_cadastro');

        $validator
            ->scalar('funcionario')
            ->maxLength('funcionario', 45)
            ->requirePresence('funcionario', 'create')
            ->notEmptyString('funcionario');

        $validator
            ->integer('copias')
            ->requirePresence('copias', 'create')
            ->notEmptyString('copias');

        $validator
            ->integer('total')
            ->allowEmptyString('total');

        $validator
            ->scalar('tipo')
            ->maxLength('tipo', 30)
            ->allowEmptyString('tipo');

        return $validator;
    }
}
