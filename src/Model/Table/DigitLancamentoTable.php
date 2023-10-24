<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * DigitLancamento Model
 *
 * @property \App\Model\Table\DigitalizacaoTable&\Cake\ORM\Association\BelongsTo $Digitalizacao
 *
 * @method \App\Model\Entity\DigitLancamento newEmptyEntity()
 * @method \App\Model\Entity\DigitLancamento newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\DigitLancamento[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\DigitLancamento get($primaryKey, $options = [])
 * @method \App\Model\Entity\DigitLancamento findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\DigitLancamento patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\DigitLancamento[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\DigitLancamento|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\DigitLancamento saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\DigitLancamento[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\DigitLancamento[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\DigitLancamento[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\DigitLancamento[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class DigitLancamentoTable extends Table
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

        $this->setTable('digit_lancamento');
        $this->setDisplayField('funcionario');
        $this->setPrimaryKey('id');

        $this->belongsTo('Digitalizacao', [
            'foreignKey' => 'digitalizacao_id',
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
            ->requirePresence('data_lancamento', 'create')
            ->notEmptyDateTime('data_lancamento');

        $validator
            ->date('data_cadastro')
            ->requirePresence('data_cadastro', 'create')
            ->notEmptyDate('data_cadastro');

        $validator
            ->scalar('status_digitalizacao')
            ->maxLength('status_digitalizacao', 45)
            ->requirePresence('status_digitalizacao', 'create')
            ->notEmptyString('status_digitalizacao');

        $validator
            ->integer('digitalizacao_id')
            ->notEmptyString('digitalizacao_id');

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
        $rules->add($rules->existsIn('digitalizacao_id', 'Digitalizacao'), ['errorField' => 'digitalizacao_id']);

        return $rules;
    }

    public function funcionarioFiltro()
    {
        $query = $this->find('list', ['keyField' => 'funcionarios', 'valueField' => 'funcionarios']) 
            ->select([
                'funcionarios' => 'funcionario'
            ])
            ->group('funcionarios')
            ->orderAsc('funcionarios')
            ->all();

        return $query;
    }

    public function servicosFiltro()
    {
        $query = $this->find('list', ['keyField' => 'id', 'valueField' => 'servicos']) 
            ->select([
                'id' => 'Servico.id',
                'servicos' => 'Servico.nome_servico'
            ])
            ->innerJoinWith('Servico')
            ->group('servicos')
            ->orderAsc('servicos')
            ->all();

        return $query;
    }
}
