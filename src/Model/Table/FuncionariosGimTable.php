<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * FuncionariosGim Model
 *
 * @method \App\Model\Entity\FuncionariosGim newEmptyEntity()
 * @method \App\Model\Entity\FuncionariosGim newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\FuncionariosGim[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\FuncionariosGim get($primaryKey, $options = [])
 * @method \App\Model\Entity\FuncionariosGim findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\FuncionariosGim patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\FuncionariosGim[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\FuncionariosGim|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\FuncionariosGim saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\FuncionariosGim[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\FuncionariosGim[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\FuncionariosGim[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\FuncionariosGim[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class FuncionariosGimTable extends Table
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

        $this->setTable('funcionarios_gim');
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
            ->scalar('nome')
            ->maxLength('nome', 100)
            ->requirePresence('nome', 'create')
            ->notEmptyString('nome');

        $validator
            ->scalar('matricula')
            ->maxLength('matricula', 45)
            ->requirePresence('matricula', 'create')
            ->notEmptyString('matricula');

        $validator
            ->email('email')
            ->requirePresence('email', 'create')
            ->notEmptyString('email');

        $validator
            ->scalar('tel')
            ->maxLength('tel', 15)
            ->requirePresence('tel', 'create')
            ->notEmptyString('tel');

        $validator
            ->scalar('contatoAlt')
            ->maxLength('contatoAlt', 100)
            ->requirePresence('contatoAlt', 'create')
            ->notEmptyString('contatoAlt');

        $validator
            ->scalar('telAlt')
            ->maxLength('telAlt', 15)
            ->requirePresence('telAlt', 'create')
            ->notEmptyString('telAlt');

        $validator
            ->scalar('endereco')
            ->maxLength('endereco', 200)
            ->requirePresence('endereco', 'create')
            ->notEmptyString('endereco');

        $validator
            ->scalar('turno')
            ->maxLength('turno', 45)
            ->requirePresence('turno', 'create')
            ->notEmptyString('turno');

        return $validator;
    }
}
