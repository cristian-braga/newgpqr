<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Digitalizacao Model
 *
 * @property \App\Model\Table\ServicoTable&\Cake\ORM\Association\BelongsTo $Servico
 * @property \App\Model\Table\DigitConferenciaTable&\Cake\ORM\Association\HasMany $DigitConferencia
 * @property \App\Model\Table\DigitLancamentoTable&\Cake\ORM\Association\HasMany $DigitLancamento
 * @property \App\Model\Table\DigitQualidadeTable&\Cake\ORM\Association\HasMany $DigitQualidade
 *
 * @method \App\Model\Entity\Digitalizacao newEmptyEntity()
 * @method \App\Model\Entity\Digitalizacao newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Digitalizacao[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Digitalizacao get($primaryKey, $options = [])
 * @method \App\Model\Entity\Digitalizacao findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Digitalizacao patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Digitalizacao[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Digitalizacao|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Digitalizacao saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Digitalizacao[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Digitalizacao[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Digitalizacao[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Digitalizacao[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class DigitalizacaoTable extends Table
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

        $this->setTable('digitalizacao');
        $this->setDisplayField('funcionario');
        $this->setPrimaryKey('id');

        $this->belongsTo('Servico', [
            'foreignKey' => 'servico_id',
            'joinType' => 'INNER',
        ]);
        $this->hasMany('DigitConferencia', [
            'foreignKey' => 'digitalizacao_id',
            'dependent' => true
        ]);
        $this->hasMany('DigitLancamento', [
            'foreignKey' => 'digitalizacao_id',
            'dependent' => true
        ]);
        $this->hasMany('DigitQualidade', [
            'foreignKey' => 'digitalizacao_id',
            'dependent' => true
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
            ->dateTime('data_digitalizacao')
            ->requirePresence('data_digitalizacao', 'create')
            ->notEmptyDateTime('data_digitalizacao');

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
            ->date('data_postagem')
            ->requirePresence('data_postagem', 'create')
            ->notEmptyDate('data_postagem');

        $validator
            ->scalar('remessa')
            ->maxLength('remessa', 11)
            ->requirePresence('remessa', 'create')
            ->notEmptyString('remessa');

        $validator
            ->integer('quantidade_documentos')
            ->requirePresence('quantidade_documentos', 'create')
            ->notEmptyString('quantidade_documentos');

        $validator
            ->scalar('status_digitalizacao')
            ->maxLength('status_digitalizacao', 45)
            ->requirePresence('status_digitalizacao', 'create')
            ->notEmptyString('status_digitalizacao');

        $validator
            ->scalar('digitalizado')
            ->maxLength('digitalizado', 10)
            ->notEmptyString('digitalizado');

        $validator
            ->integer('servico_id')
            ->notEmptyString('servico_id');

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

        return $rules;
    }

    public function selectServicos()
    {
        $servicos = $this->Servico
            ->find('list', ['keyField' => 'id', 'valueField' => 'nome_servico'])
            ->orderAsc('nome_servico')
            ->all();

        return $servicos;
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
