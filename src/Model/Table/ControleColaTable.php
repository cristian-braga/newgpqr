<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ControleCola Model
 *
 * @method \App\Model\Entity\ControleCola newEmptyEntity()
 * @method \App\Model\Entity\ControleCola newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\ControleCola[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\ControleCola get($primaryKey, $options = [])
 * @method \App\Model\Entity\ControleCola findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\ControleCola patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\ControleCola[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\ControleCola|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ControleCola saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ControleCola[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\ControleCola[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\ControleCola[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\ControleCola[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class ControleColaTable extends Table
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

        $this->setTable('controle_cola');
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
            ->scalar('funcionario')
            ->maxLength('funcionario', 45)
            ->allowEmptyString('funcionario');

        $validator
            ->date('data_operacao')
            ->requirePresence('data_operacao', 'create')
            ->notEmptyDate('data_operacao');

        $validator
            ->scalar('operacao')
            ->maxLength('operacao', 45)
            ->notEmptyString('operacao');

        $validator
            ->integer('quantidade')
            ->notEmptyString('quantidade');

        $validator
            ->scalar('nota')
            ->maxLength('nota', 45)
            ->allowEmptyString('nota');

        return $validator;
    }

    public function queryControleCola()
    {
        $query = $this->find();
        $query->select([
                'operacao' => 'operacao',
                'total' => $query->func()->sum('quantidade')
            ])
            ->group('operacao')
            ->orderAsc('operacao');

        return $query;
    }
}
