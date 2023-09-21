<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Smafe008b Model
 *
 * @method \App\Model\Entity\Smafe008b newEmptyEntity()
 * @method \App\Model\Entity\Smafe008b newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Smafe008b[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Smafe008b get($primaryKey, $options = [])
 * @method \App\Model\Entity\Smafe008b findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Smafe008b patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Smafe008b[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Smafe008b|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Smafe008b saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Smafe008b[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Smafe008b[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Smafe008b[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Smafe008b[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class Smafe008bTable extends Table
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

        $this->setTable('smafe008b');
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
            ->scalar('concurso')
            ->maxLength('concurso', 5)
            ->allowEmptyString('concurso');

        $validator
            ->scalar('job')
            ->maxLength('job', 4)
            ->allowEmptyString('job');

        $validator
            ->scalar('referencia')
            ->maxLength('referencia', 30)
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
