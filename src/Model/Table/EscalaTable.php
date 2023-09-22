<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Escala Model
 *
 * @method \App\Model\Entity\Escala newEmptyEntity()
 * @method \App\Model\Entity\Escala newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Escala[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Escala get($primaryKey, $options = [])
 * @method \App\Model\Entity\Escala findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Escala patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Escala[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Escala|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Escala saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Escala[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Escala[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Escala[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Escala[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class EscalaTable extends Table
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

        $this->setTable('escala');
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
            ->date('data_inicial')
            ->requirePresence('data_inicial', 'create')
            ->notEmptyDate('data_inicial');

        $validator
            ->date('data_final')
            ->requirePresence('data_final', 'create')
            ->notEmptyDate('data_final');

        $validator
            ->scalar('imp_func1')
            ->maxLength('imp_func1', 100)
            ->requirePresence('imp_func1', 'create')
            ->notEmptyString('imp_func1');

        $validator
            ->scalar('imp_func2')
            ->maxLength('imp_func2', 100)
            ->requirePresence('imp_func2', 'create')
            ->notEmptyString('imp_func2');

        $validator
            ->scalar('conf_func')
            ->maxLength('conf_func', 100)
            ->requirePresence('conf_func', 'create')
            ->notEmptyString('conf_func');

        $validator
            ->scalar('env_func')
            ->maxLength('env_func', 100)
            ->requirePresence('env_func', 'create')
            ->notEmptyString('env_func');

        $validator
            ->scalar('tri_func1')
            ->maxLength('tri_func1', 100)
            ->requirePresence('tri_func1', 'create')
            ->notEmptyString('tri_func1');

        $validator
            ->scalar('tru_func2')
            ->maxLength('tru_func2', 100)
            ->requirePresence('tru_func2', 'create')
            ->notEmptyString('tru_func2');

        $validator
            ->scalar('tri_func3')
            ->maxLength('tri_func3', 100)
            ->requirePresence('tri_func3', 'create')
            ->notEmptyString('tri_func3');

        $validator
            ->scalar('exp_func')
            ->maxLength('exp_func', 100)
            ->requirePresence('exp_func', 'create')
            ->notEmptyString('exp_func');

        return $validator;
    }
}
