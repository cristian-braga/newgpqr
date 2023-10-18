<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * PassagemTurno Model
 *
 * @method \App\Model\Entity\PassagemTurno newEmptyEntity()
 * @method \App\Model\Entity\PassagemTurno newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\PassagemTurno[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\PassagemTurno get($primaryKey, $options = [])
 * @method \App\Model\Entity\PassagemTurno findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\PassagemTurno patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\PassagemTurno[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\PassagemTurno|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\PassagemTurno saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\PassagemTurno[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\PassagemTurno[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\PassagemTurno[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\PassagemTurno[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class PassagemTurnoTable extends Table
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

        $this->setTable('passagem_turno');
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
            ->scalar('funcionario')
            ->maxLength('funcionario', 45)
            ->requirePresence('funcionario', 'create')
            ->notEmptyString('funcionario');

        $validator
            ->date('data_cadastro')
            ->requirePresence('data_cadastro', 'create')
            ->notEmptyDateTime('data_cadastro');

        $validator
            ->scalar('turno')
            ->maxLength('turno', 45)
            ->requirePresence('turno', 'create')
            ->notEmptyString('turno');

        $validator
            ->scalar('etapa')
            ->maxLength('etapa', 45)
            ->requirePresence('etapa', 'create')
            ->notEmptyString('etapa');

        $validator
            ->scalar('assunto')
            ->maxLength('assunto', 225)
            ->requirePresence('assunto', 'create')
            ->notEmptyString('assunto');

        $validator
            ->scalar('descricao')
            ->requirePresence('descricao', 'create')
            ->notEmptyString('descricao');

        return $validator;
    }

    public function buscaEtapas()
    {
        $query = $this->find('list', ['keyField' => 'etapas', 'valueField' => 'etapas'])
            ->select([
                'etapas' => 'etapa'
            ])
            ->group('etapas')
            ->orderAsc('etapas')
            ->all();

        return $query;
    }
}
