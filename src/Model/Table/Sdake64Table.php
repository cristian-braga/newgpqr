<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Sdake64 Model
 *
 * @method \App\Model\Entity\Sdake64 newEmptyEntity()
 * @method \App\Model\Entity\Sdake64 newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Sdake64[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Sdake64 get($primaryKey, $options = [])
 * @method \App\Model\Entity\Sdake64 findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Sdake64 patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Sdake64[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Sdake64|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Sdake64 saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Sdake64[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Sdake64[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Sdake64[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Sdake64[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class Sdake64Table extends Table
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

        $this->setTable('sdake64');
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

        $validator
            ->integer('total1')
            ->allowEmptyString('total1');

        $validator
            ->integer('copias1')
            ->allowEmptyString('copias1');

        $validator
            ->integer('paginas1')
            ->allowEmptyString('paginas1');

        $validator
            ->integer('total2')
            ->allowEmptyString('total2');

        $validator
            ->integer('copias2')
            ->allowEmptyString('copias2');

        $validator
            ->integer('paginas2')
            ->allowEmptyString('paginas2');

        $validator
            ->integer('totaltudo')
            ->allowEmptyString('totaltudo');

        $validator
            ->integer('total3')
            ->allowEmptyString('total3');

        $validator
            ->integer('copias3')
            ->allowEmptyString('copias3');

        $validator
            ->integer('paginas3')
            ->allowEmptyString('paginas3');

        $validator
            ->integer('total4')
            ->allowEmptyString('total4');

        $validator
            ->integer('copias4')
            ->allowEmptyString('copias4');

        $validator
            ->integer('paginas4')
            ->allowEmptyString('paginas4');

        return $validator;
    }
}
