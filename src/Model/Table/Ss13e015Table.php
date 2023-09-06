<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Ss13e015 Model
 *
 * @method \App\Model\Entity\Ss13e015 newEmptyEntity()
 * @method \App\Model\Entity\Ss13e015 newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Ss13e015[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Ss13e015 get($primaryKey, $options = [])
 * @method \App\Model\Entity\Ss13e015 findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Ss13e015 patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Ss13e015[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Ss13e015|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Ss13e015 saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Ss13e015[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Ss13e015[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Ss13e015[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Ss13e015[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class Ss13e015Table extends Table
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

        $this->setTable('ss13e015');
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
