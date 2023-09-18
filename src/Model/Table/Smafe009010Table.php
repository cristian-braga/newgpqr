<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Smafe009010 Model
 *
 * @method \App\Model\Entity\Smafe009010 newEmptyEntity()
 * @method \App\Model\Entity\Smafe009010 newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Smafe009010[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Smafe009010 get($primaryKey, $options = [])
 * @method \App\Model\Entity\Smafe009010 findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Smafe009010 patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Smafe009010[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Smafe009010|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Smafe009010 saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Smafe009010[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Smafe009010[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Smafe009010[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Smafe009010[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class Smafe009010Table extends Table
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

        $this->setTable('smafe009010');
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
            ->scalar('servico')
            ->maxLength('servico', 10)
            ->allowEmptyString('servico');

        $validator
            ->scalar('referencia')
            ->maxLength('referencia', 10)
            ->allowEmptyString('referencia');

        $validator
            ->date('data')
            ->allowEmptyDate('data');

        $validator
            ->scalar('concurso')
            ->maxLength('concurso', 10)
            ->allowEmptyString('concurso');

        $validator
            ->integer('quantidade_etiquetas')
            ->allowEmptyString('quantidade_etiquetas');

        $validator
            ->integer('job')
            ->allowEmptyString('job');

        $validator
            ->scalar('funcionario')
            ->maxLength('funcionario', 60)
            ->allowEmptyString('funcionario');

        $validator
            ->scalar('descricao')
            ->maxLength('descricao', 60)
            ->allowEmptyString('descricao');    

        return $validator;
    }
}
