<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Cd Model
 *
 * @method \App\Model\Entity\Cd newEmptyEntity()
 * @method \App\Model\Entity\Cd newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Cd[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Cd get($primaryKey, $options = [])
 * @method \App\Model\Entity\Cd findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Cd patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Cd[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Cd|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Cd saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Cd[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Cd[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Cd[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Cd[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class CdTable extends Table
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

        $this->setTable('cd');
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
            ->integer('quantidade')
            ->requirePresence('quantidade', 'create')
            ->notEmptyString('quantidade');

        $validator
            ->integer('ocorrencia')
            ->requirePresence('ocorrencia', 'create')
            ->notEmptyString('ocorrencia');

        $validator
            ->scalar('descricao')
            ->maxLength('descricao', 300)
            ->requirePresence('descricao', 'create')
            ->notEmptyString('descricao');

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
            ->scalar('solicitante')
            ->maxLength('solicitante', 60)
            ->requirePresence('solicitante', 'create')
            ->notEmptyString('solicitante');

        $validator
            ->scalar('cliente')
            ->maxLength('cliente', 60)
            ->requirePresence('cliente', 'create')
            ->notEmptyString('cliente');

        $validator
            ->scalar('observacao')
            ->maxLength('observacao', 60)
            ->allowEmptyString('observacao');

        return $validator;
    }
}
