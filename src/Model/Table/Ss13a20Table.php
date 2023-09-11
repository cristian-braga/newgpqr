<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Ss13a20 Model
 *
 * @method \App\Model\Entity\Ss13a20 newEmptyEntity()
 * @method \App\Model\Entity\Ss13a20 newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Ss13a20[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Ss13a20 get($primaryKey, $options = [])
 * @method \App\Model\Entity\Ss13a20 findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Ss13a20 patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Ss13a20[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Ss13a20|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Ss13a20 saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Ss13a20[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Ss13a20[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Ss13a20[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Ss13a20[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class Ss13a20Table extends Table
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

        $this->setTable('ss13a20');
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
            ->integer('capas')
            ->allowEmptyString('capas');

        $validator
            ->integer('paginas')
            ->allowEmptyString('paginas');

        $validator
            ->integer('total')
            ->allowEmptyString('total');

        $validator
            ->scalar('job')
            ->maxLength('job', 4)
            ->allowEmptyString('job');

        $validator
            ->scalar('referencia')
            ->maxLength('referencia', 45)
            ->allowEmptyString('referencia');

        $validator
            ->date('data')
            ->allowEmptyDate('data');

        $validator
            ->scalar('funcionario')
            ->maxLength('funcionario', 40)
            ->allowEmptyString('funcionario');

        return $validator;
    }
}
