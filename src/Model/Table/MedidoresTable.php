<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Medidores Model
 *
 * @method \App\Model\Entity\Medidore newEmptyEntity()
 * @method \App\Model\Entity\Medidore newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Medidore[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Medidore get($primaryKey, $options = [])
 * @method \App\Model\Entity\Medidore findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Medidore patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Medidore[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Medidore|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Medidore saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Medidore[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Medidore[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Medidore[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Medidore[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class MedidoresTable extends Table
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

        $this->setTable('medidores');
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
            ->date('data_cadastro')
            ->requirePresence('data_cadastro', 'create')
            ->notEmptyDate('data_cadastro');
            
        $validator
            ->integer('nuv1_medidor1')
            ->notEmptyString('nuv1_medidor1');

        $validator
            ->integer('nuv1_medidor2')
            ->notEmptyString('nuv1_medidor2');

        $validator
            ->integer('nuv2_medidor1')
            ->notEmptyString('nuv2_medidor1');

        $validator
            ->integer('nuv2_medidor2')
            ->notEmptyString('nuv2_medidor2');

        return $validator;
    }
}
