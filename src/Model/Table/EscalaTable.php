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
            ->notEmptyDate('data_inicial', 'Campo obrigatório!');

        $validator
            ->date('data_final')
            ->requirePresence('data_final', 'create')
            ->notEmptyDate('data_final', 'Campo obrigatório!');

        $validator
            ->scalar('turno')
            ->maxLength('turno', 10)
            ->requirePresence('turno', 'create')
            ->notEmptyString('turno');

        $validator
            ->scalar('impressao')
            ->maxLength('impressao', 100)
            ->allowEmptyString('impressao');

        $validator
            ->scalar('conferencia')
            ->maxLength('conferencia', 100)
            ->allowEmptyString('conferencia');

        $validator
            ->scalar('envelopamento')
            ->maxLength('envelopamento', 100)
            ->allowEmptyString('envelopamento');

        $validator
            ->scalar('triagem')
            ->maxLength('triagem', 100)
            ->allowEmptyString('triagem');

        $validator
            ->scalar('expedicao')
            ->maxLength('expedicao', 100)
            ->allowEmptyString('expedicao');

        return $validator;
    }
}
