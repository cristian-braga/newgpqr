<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Sdake05 Model
 *
 * @method \App\Model\Entity\Sdake05 newEmptyEntity()
 * @method \App\Model\Entity\Sdake05 newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Sdake05[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Sdake05 get($primaryKey, $options = [])
 * @method \App\Model\Entity\Sdake05 findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Sdake05 patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Sdake05[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Sdake05|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Sdake05 saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Sdake05[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Sdake05[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Sdake05[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Sdake05[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class Sdake05Table extends Table
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

        $this->setTable('sdake05');
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
            ->integer('total')
            ->allowEmptyString('total');

        $validator
            ->scalar('job')
            ->maxLength('job', 4)
            ->requirePresence('job', 'create')
            ->notEmptyString('job');

        $validator
            ->integer('capa')
            ->allowEmptyString('capa');

        $validator
            ->scalar('funcionario')
            ->maxLength('funcionario', 45)
            ->allowEmptyString('funcionario');

        $validator
            ->date('data_cadastro')
            ->requirePresence('data_cadastro', 'create')
            ->notEmptyDate('data_cadastro');

        return $validator;
    }
}
