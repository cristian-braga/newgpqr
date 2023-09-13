<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Encadernacao Model
 *
 * @method \App\Model\Entity\Encadernacao newEmptyEntity()
 * @method \App\Model\Entity\Encadernacao newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Encadernacao[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Encadernacao get($primaryKey, $options = [])
 * @method \App\Model\Entity\Encadernacao findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Encadernacao patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Encadernacao[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Encadernacao|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Encadernacao saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Encadernacao[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Encadernacao[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Encadernacao[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Encadernacao[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class EncadernacaoTable extends Table
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

        $this->setTable('encadernacao');
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
            ->scalar('descricao')
            ->maxLength('descricao', 60)
            ->requirePresence('descricao', 'create')
            ->notEmptyString('descricao');

        $validator
            ->integer('paginas')
            ->requirePresence('paginas', 'create')
            ->notEmptyString('paginas');

        $validator
            ->scalar('ocorrencia')
            ->maxLength('ocorrencia', 20)
            ->requirePresence('ocorrencia', 'create')
            ->notEmptyString('ocorrencia');

        $validator
            ->scalar('solicitante')
            ->maxLength('solicitante', 60)
            ->allowEmptyString('solicitante');

        $validator
            ->date('data_cadastro')
            ->requirePresence('data_cadastro', 'create')
            ->notEmptyDate('data_cadastro');

        $validator
            ->scalar('funcionario')
            ->maxLength('funcionario', 60)
            ->requirePresence('funcionario', 'create')
            ->notEmptyString('funcionario');

        $validator
            ->scalar('tipo_capa')
            ->maxLength('tipo_capa', 45)
            ->requirePresence('tipo_capa', 'create')
            ->notEmptyString('tipo_capa');

        $validator
            ->integer('copias')
            ->allowEmptyString('copias');

        $validator
            ->integer('total')
            ->allowEmptyString('total');

        $validator
            ->integer('capas')
            ->allowEmptyString('capas');

        return $validator;
    }
}
