<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Triagem Model
 *
 * @property \App\Model\Table\AtividadeTable&\Cake\ORM\Association\BelongsTo $Atividade
 * @property \App\Model\Table\StatusAtividadeTable&\Cake\ORM\Association\BelongsTo $StatusAtividade
 *
 * @method \App\Model\Entity\Triagem newEmptyEntity()
 * @method \App\Model\Entity\Triagem newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Triagem[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Triagem get($primaryKey, $options = [])
 * @method \App\Model\Entity\Triagem findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Triagem patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Triagem[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Triagem|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Triagem saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Triagem[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Triagem[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Triagem[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Triagem[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class TriagemTable extends Table
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

        $this->setTable('triagem');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Atividade', [
            'foreignKey' => 'atividade_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('StatusAtividade', [
            'foreignKey' => 'status_atividade_id',
            'joinType' => 'INNER',
        ]);
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
            ->requirePresence('funcionario', 'create')
            ->notEmptyString('funcionario');

        $validator
            ->dateTime('data_triagem')
            ->allowEmptyDateTime('data_triagem');

        $validator
            ->integer('atividade_id')
            ->notEmptyString('atividade_id');

        $validator
            ->integer('status_atividade_id')
            ->notEmptyString('status_atividade_id');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules): RulesChecker
    {
        $rules->add($rules->existsIn('atividade_id', 'Atividade'), ['errorField' => 'atividade_id']);
        $rules->add($rules->existsIn('status_atividade_id', 'StatusAtividade'), ['errorField' => 'status_atividade_id']);

        return $rules;
    }
}
