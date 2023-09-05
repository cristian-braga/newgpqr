<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Sdg1 Model
 *
 * @method \App\Model\Entity\Sdg1 newEmptyEntity()
 * @method \App\Model\Entity\Sdg1 newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Sdg1[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Sdg1 get($primaryKey, $options = [])
 * @method \App\Model\Entity\Sdg1 findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Sdg1 patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Sdg1[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Sdg1|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Sdg1 saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Sdg1[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Sdg1[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Sdg1[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Sdg1[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class Sdg1Table extends Table
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

        $this->setTable('sdg1');
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
            ->integer('copias')
            ->allowEmptyString('copias');

        $validator
            ->integer('paginas')
            ->requirePresence('paginas', 'create')
            ->notEmptyString('paginas');

        $validator
            ->scalar('job')
            ->maxLength('job', 5)
            ->requirePresence('job', 'create')
            ->notEmptyString('job');

        $validator
            ->integer('capa')
            ->allowEmptyString('capa');

        $validator
            ->date('dataAtual')
            ->requirePresence('dataAtual', 'create')
            ->notEmptyDate('dataAtual');

        $validator
            ->scalar('funcionario')
            ->maxLength('funcionario', 60)
            ->requirePresence('funcionario', 'create')
            ->notEmptyString('funcionario');

        $validator
            ->integer('total')
            ->allowEmptyString('total');

        return $validator;
    }
}
