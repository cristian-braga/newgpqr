<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Permissoes Model
 *
 * @method \App\Model\Entity\Permissoes newEmptyEntity()
 * @method \App\Model\Entity\Permissoes newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Permissoes[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Permissoes get($primaryKey, $options = [])
 * @method \App\Model\Entity\Permissoes findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Permissoes patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Permissoes[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Permissoes|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Permissoes saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Permissoes[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Permissoes[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Permissoes[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Permissoes[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class PermissoesTable extends Table
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

        $this->setTable('permissoes');
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
            ->scalar('matricula')
            ->maxLength('matricula', 45)
            ->requirePresence('matricula', 'create')
            ->notEmptyString('matricula');

        $validator
            ->scalar('funcionario')
            ->maxLength('funcionario', 45)
            ->requirePresence('funcionario', 'create')
            ->notEmptyString('funcionario');

        $validator
            ->scalar('permissao')
            ->maxLength('permissao', 45)
            ->requirePresence('permissao', 'create')
            ->notEmptyString('permissao');

        return $validator;
    }

    public function obterAdmins()
    {
        $query = $this->find()
            ->where([
                'permissao' => 'Administrador'
            ])
            ->orderAsc('funcionario')
            ->all();
        
        return $query;
    }

    public function obterFuncionarios()
    {
        $query = $this->find()
            ->where([
                'permissao' => 'Funcionário'
            ])
            ->orderAsc('funcionario')
            ->all();
        
        return $query;
    }
}
