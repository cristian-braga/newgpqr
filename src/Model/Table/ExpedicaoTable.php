<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Expedicao Model
 *
 * @property \App\Model\Table\AtividadeTable&\Cake\ORM\Association\BelongsTo $Atividade
 * @property \App\Model\Table\ServicoTable&\Cake\ORM\Association\BelongsTo $Servico
 * @property \App\Model\Table\StatusAtividadeTable&\Cake\ORM\Association\BelongsTo $StatusAtividade
 *
 * @method \App\Model\Entity\Expedicao newEmptyEntity()
 * @method \App\Model\Entity\Expedicao newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Expedicao[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Expedicao get($primaryKey, $options = [])
 * @method \App\Model\Entity\Expedicao findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Expedicao patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Expedicao[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Expedicao|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Expedicao saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Expedicao[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Expedicao[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Expedicao[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Expedicao[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class ExpedicaoTable extends Table
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

        $this->setTable('expedicao');
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
            ->dateTime('data_lancamento')
            ->allowEmptyDateTime('data_lancamento');

        $validator
            ->date('data_expedicao')
            ->allowEmptyDate('data_expedicao');

        $validator
            ->integer('capas')
            ->allowEmptyString('capas');

        $validator
            ->scalar('ocorrencia')
            ->maxLength('ocorrencia', 15)
            ->allowEmptyString('ocorrencia');

        $validator
            ->scalar('solicitante')
            ->maxLength('solicitante', 45)
            ->allowEmptyString('solicitante');

        $validator
            ->scalar('responsavel_remessa')
            ->maxLength('responsavel_remessa', 45)
            ->allowEmptyString('responsavel_remessa');

        $validator
            ->scalar('responsavel_expedicao')
            ->maxLength('responsavel_expedicao', 45)
            ->allowEmptyString('responsavel_expedicao');

        $validator
            ->scalar('responsavel_coleta')
            ->maxLength('responsavel_coleta', 45)
            ->allowEmptyString('responsavel_coleta');

        $validator
            ->scalar('observacao')
            ->allowEmptyString('observacao');

        $validator
            ->time('hora')
            ->allowEmptyTime('hora');

        $validator
            ->integer('atividade_id')
            ->notEmptyString('atividade_id');

        $validator
            ->integer('servico_id')
            ->notEmptyString('servico_id');

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
        $rules->add($rules->existsIn('servico_id', 'Servico'), ['errorField' => 'servico_id']);
        $rules->add($rules->existsIn('status_atividade_id', 'StatusAtividade'), ['errorField' => 'status_atividade_id']);

        return $rules;
    }
}
