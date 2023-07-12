<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Impressao Model
 *
 * @property \App\Model\Table\AtividadeTable&\Cake\ORM\Association\BelongsTo $Atividade
 * @property \App\Model\Table\ServicoTable&\Cake\ORM\Association\BelongsTo $Servico
 * @property \App\Model\Table\StatusAtividadeTable&\Cake\ORM\Association\BelongsTo $StatusAtividade
 * @property \App\Model\Table\ImpressoraTable&\Cake\ORM\Association\BelongsTo $Impressora
 *
 * @method \App\Model\Entity\Impressao newEmptyEntity()
 * @method \App\Model\Entity\Impressao newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Impressao[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Impressao get($primaryKey, $options = [])
 * @method \App\Model\Entity\Impressao findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Impressao patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Impressao[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Impressao|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Impressao saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Impressao[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Impressao[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Impressao[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Impressao[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class ImpressaoTable extends Table
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

        $this->setTable('impressao');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Atividade', [
            'foreignKey' => 'atividade_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Servico', [
            'foreignKey' => 'servico_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('StatusAtividade', [
            'foreignKey' => 'status_atividade_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Impressora', [
            'foreignKey' => 'impressora_id',
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
            ->dateTime('data_impressao')
            ->allowEmptyDateTime('data_impressao');

        $validator
            ->integer('atividade_id')
            ->notEmptyString('atividade_id');

        $validator
            ->integer('servico_id')
            ->notEmptyString('servico_id');

        $validator
            ->integer('status_atividade_id')
            ->notEmptyString('status_atividade_id');

        $validator
            ->integer('impressora_id')
            ->notEmptyString('impressora_id');

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
        $rules->add($rules->existsIn('servico_id', 'Servico'), ['errorField' => 'servico_id']);
        $rules->add($rules->existsIn('status_atividade_id', 'StatusAtividade'), ['errorField' => 'status_atividade_id']);
        $rules->add($rules->existsIn('impressora_id', 'Impressora'), ['errorField' => 'impressora_id']);

        return $rules;
    }
}
