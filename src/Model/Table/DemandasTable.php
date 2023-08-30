<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Demandas Model
 *
 * @method \App\Model\Entity\Demanda newEmptyEntity()
 * @method \App\Model\Entity\Demanda newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Demanda[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Demanda get($primaryKey, $options = [])
 * @method \App\Model\Entity\Demanda findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Demanda patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Demanda[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Demanda|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Demanda saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Demanda[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Demanda[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Demanda[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Demanda[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class DemandasTable extends Table
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

        $this->setTable('demandas');
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
            ->scalar('demanda_resumo')
            ->maxLength('demanda_resumo', 100)
            ->requirePresence('demanda_resumo', 'create')
            ->allowEmpty('demanda_resumo');
            

        $validator
            ->scalar('demanda_descricao')
            ->notEmptyString('demanda_descricao') 
            ->allowEmptyString('demanda_descricao');

        $validator
            ->scalar('status')
            ->maxLength('status', 45)
            ->allowEmptyString('status');
            

        $validator
            ->dateTime('data_abertura')
            ->allowEmptyDate('data_abertura');

        $validator
            ->dateTime('data_termino')
            ->allowEmptyDate('data_termino');


        $validator
            ->scalar('demanda_prioridade')
            ->maxLength('demanda_prioridade', 45)
            ->allowEmptyString('demanda_prioridade');


        $validator
            ->scalar('demanda_tipo')
            ->maxLength('demanda_tipo', 45)
            ->allowEmptyString('demanda_tipo');

        $validator
            ->scalar('demanda_responsavel')
            ->maxLength('demanda_responsavel', 45)
            ->allowEmptyString('demanda_responsavel');

        $validator
            ->scalar('demanda_solicitante')
            ->maxLength('demanda_solicitante', 45)
            ->allowEmptyString('demanda_solicitante');

        $validator
            ->scalar('demanda_log')
            ->allowEmptyString('demanda_log');
        
        $validator 
            ->scalar('reabertura')
            ->maxLength('reabertura', 100);

        return $validator;
    }
}
