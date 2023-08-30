<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ServicosAnulados Model
 *
 * @property \App\Model\Table\AtividadeTable&\Cake\ORM\Association\BelongsTo $Atividade
 * @property \App\Model\Table\StatusAtividadeTable&\Cake\ORM\Association\BelongsTo $StatusAtividade
 *
 * @method \App\Model\Entity\ServicosAnulado newEmptyEntity()
 * @method \App\Model\Entity\ServicosAnulado newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\ServicosAnulado[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\ServicosAnulado get($primaryKey, $options = [])
 * @method \App\Model\Entity\ServicosAnulado findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\ServicosAnulado patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\ServicosAnulado[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\ServicosAnulado|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ServicosAnulado saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ServicosAnulado[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\ServicosAnulado[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\ServicosAnulado[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\ServicosAnulado[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class ServicosAnuladosTable extends Table
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

        $this->setTable('servicos_anulados');
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
            ->date('data_cadastro')
            ->requirePresence('data_cadastro', 'create')
            ->notEmptyDate('data_cadastro');

        $validator
            ->scalar('etapa')
            ->maxLength('etapa', 45)
            ->requirePresence('etapa', 'create')
            ->notEmptyString('etapa');

        $validator
            ->scalar('observacao')
            ->requirePresence('observacao', 'create')
            ->notEmptyString('observacao');

        $validator
            ->integer('atividade_id')
            ->notEmptyString('atividade_id');

        $validator
            ->integer('status_atividade_id')
            ->notEmptyString('status_atividade_id');

        $validator
            ->integer('status_anterior')
            ->notEmptyString('status_anterior');

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

    public function existeDado($atividade_id)
    {
        $query = $this->find()
            ->where(['atividade_id' => $atividade_id])
            ->first();

        return $query;
    }

    public function servicos()
    {
        $query = $this->find('list', ['keyField' => 'id', 'valueField' => 'servicos'])
            ->select([
                'id' => 'Servico.id',
                'servicos' => 'Servico.nome_servico'
            ])
            ->innerJoinWith('Atividade')
            ->innerJoinWith('Atividade.Servico')
            ->group('Servico.nome_servico')
            ->orderAsc('Servico.nome_servico')
            ->all();

        return $query;
    }
}