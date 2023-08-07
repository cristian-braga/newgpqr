<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Atividade Model
 *
 * @property \App\Model\Table\ServicoTable&\Cake\ORM\Association\BelongsTo $Servico
 * @property \App\Model\Table\StatusAtividadeTable&\Cake\ORM\Association\BelongsTo $StatusAtividade
 * @property \App\Model\Table\EnvelopamentoTable&\Cake\ORM\Association\HasMany $Envelopamento
 * @property \App\Model\Table\ExpedicaoTable&\Cake\ORM\Association\HasMany $Expedicao
 * @property \App\Model\Table\ImpressaoTable&\Cake\ORM\Association\HasMany $Impressao
 * @property \App\Model\Table\TriagemTable&\Cake\ORM\Association\HasMany $Triagem
 *
 * @method \App\Model\Entity\Atividade newEmptyEntity()
 * @method \App\Model\Entity\Atividade newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Atividade[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Atividade get($primaryKey, $options = [])
 * @method \App\Model\Entity\Atividade findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Atividade patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Atividade[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Atividade|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Atividade saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Atividade[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Atividade[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Atividade[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Atividade[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class AtividadeTable extends Table
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

        $this->setTable('atividade');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Servico', [
            'foreignKey' => 'servico_id',
        ]);
        $this->belongsTo('StatusAtividade', [
            'foreignKey' => 'status_atividade_id',
        ]);
        $this->hasMany('Conferencia', [
            'foreignKey' => 'atividade_id',
        ]);
        $this->hasMany('Envelopamento', [
            'foreignKey' => 'atividade_id',
        ]);
        $this->hasMany('Expedicao', [
            'foreignKey' => 'atividade_id',
        ]);
        $this->hasMany('Impressao', [
            'foreignKey' => 'atividade_id',
        ]);
        $this->hasMany('Triagem', [
            'foreignKey' => 'atividade_id',
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
            ->scalar('job')
            ->maxLength('job', 10, 'Máximo de 10 caracteres')
            ->allowEmptyString('job');

        $validator
            ->dateTime('data_atividade')
            ->allowEmptyDateTime('data_atividade');

        $validator
            ->date('data_postagem')
            ->allowEmptyDate('data_postagem');

        $validator
            ->date('data_cadastro')
            ->allowEmptyDate('data_cadastro');

        $validator
            ->scalar('funcionario')
            ->maxLength('funcionario', 99)
            ->requirePresence('funcionario', 'create')
            ->notEmptyString('funcionario');

        $validator
            ->scalar('remessa_atividade')
            ->maxLength('remessa_atividade', 11, 'Máximo de 11 caracteres')
            ->allowEmptyString('remessa_atividade');

        $validator
            ->integer('quantidade_documentos')
            ->allowEmptyString('quantidade_documentos');

        $validator
            ->integer('quantidade_folhas')
            ->allowEmptyString('quantidade_folhas');

        $validator
            ->integer('quantidade_paginas')
            ->allowEmptyString('quantidade_paginas');

        $validator
            ->scalar('recibo_postagem')
            ->maxLength('recibo_postagem', 10)
            ->allowEmptyString('recibo_postagem');

        $validator
            ->integer('servico_id')
            ->allowEmptyString('servico_id');

        $validator
            ->integer('status_atividade_id')
            ->allowEmptyString('status_atividade_id');

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
        $rules->add($rules->existsIn('servico_id', 'Servico'), ['errorField' => 'servico_id']);
        $rules->add($rules->existsIn('status_atividade_id', 'StatusAtividade'), ['errorField' => 'status_atividade_id']);

        return $rules;
    }
}
