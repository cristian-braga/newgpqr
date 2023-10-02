<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Contratos Model
 *
 * @method \App\Model\Entity\Contrato newEmptyEntity()
 * @method \App\Model\Entity\Contrato newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Contrato[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Contrato get($primaryKey, $options = [])
 * @method \App\Model\Entity\Contrato findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Contrato patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Contrato[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Contrato|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Contrato saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Contrato[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Contrato[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Contrato[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Contrato[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class ContratosTable extends Table
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

        $this->setTable('contratos');
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
            ->scalar('contrato')
            ->maxLength('contrato', 100)
            ->requirePresence('contrato', 'create')
            ->notEmptyString('contrato');

        $validator
            ->scalar('empresa')
            ->maxLength('empresa', 100)
            ->requirePresence('empresa', 'create')
            ->notEmptyString('empresa');

        $validator
            ->scalar('maquina')
            ->maxLength('maquina', 100)
            ->requirePresence('maquina', 'create')
            ->notEmptyString('maquina');

        $validator
            ->numeric('valor_mensal')
            ->requirePresence('valor_mensal', 'create')
            ->notEmptyString('valor_mensal');

        $validator
            ->integer('parcelas')
            ->requirePresence('parcelas', 'create')
            ->notEmptyString('parcelas');

        $validator
            ->numeric('saldo_contratual')
            ->requirePresence('saldo_contratual', 'create')
            ->notEmptyString('saldo_contratual');

        $validator
            ->date('vencimento')
            ->allowEmptyDate('vencimento');

            $validator
            ->numeric('valor_total')
            ->requirePresence('valor_total', 'create')
            ->notEmptyString('valor_total');

        return $validator;
    }
}
