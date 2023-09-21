<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * FuncionarioFerias Model
 *
 * @method \App\Model\Entity\FuncionarioFeria newEmptyEntity()
 * @method \App\Model\Entity\FuncionarioFeria newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\FuncionarioFeria[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\FuncionarioFeria get($primaryKey, $options = [])
 * @method \App\Model\Entity\FuncionarioFeria findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\FuncionarioFeria patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\FuncionarioFeria[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\FuncionarioFeria|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\FuncionarioFeria saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\FuncionarioFeria[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\FuncionarioFeria[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\FuncionarioFeria[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\FuncionarioFeria[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class FuncionarioFeriasTable extends Table
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

        $this->setTable('funcionario_ferias');
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
            ->scalar('funcionario_nome')
            ->maxLength('funcionario_nome', 100);

        $validator
            ->integer('qtd_dias');

        $validator
            ->date('data_inicio');

        return $validator;
    }
}
