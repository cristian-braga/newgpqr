<?php
declare(strict_types=1);

namespace App\Model\Table;
use Cake\Datasource\ConnectionManager;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Saalm Model
 *
 * @method \App\Model\Entity\Saalm newEmptyEntity()
 * @method \App\Model\Entity\Saalm newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Saalm[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Saalm get($primaryKey, $options = [])
 * @method \App\Model\Entity\Saalm findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Saalm patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Saalm[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Saalm|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Saalm saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Saalm[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Saalm[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Saalm[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Saalm[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class SaalmTable extends Table
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

        $this->setTable('saalm');
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
            ->integer('copias')
            ->allowEmptyString('copias');

        $validator
            ->integer('paginas')
            ->requirePresence('paginas', 'create')
            ->notEmptyString('paginas');

        $validator
            ->scalar('job')
            ->maxLength('job', 5)
            ->requirePresence('job', 'create')
            ->notEmptyString('job');

        $validator
            ->integer('capa')
            ->allowEmptyString('capa');

        $validator
            ->date('dataAtual')
            ->requirePresence('dataAtual', 'create')
            ->notEmptyDate('dataAtual');

        $validator
            ->scalar('funcionario')
            ->maxLength('funcionario', 60)
            ->requirePresence('funcionario', 'create')
            ->notEmptyString('funcionario');

        $validator
            ->integer('total')
            ->allowEmptyString('total');

        $validator
            ->integer('total1')
            ->allowEmptyString('total1');

        $validator
            ->integer('copias1')
            ->allowEmptyString('copias1');

        $validator
            ->integer('capa1')
            ->allowEmptyString('capa1');

        $validator
            ->integer('paginas1')
            ->allowEmptyString('paginas1');

        $validator
            ->integer('total2')
            ->allowEmptyString('total2');

        $validator
            ->integer('total3')
            ->allowEmptyString('total3');

        return $validator;
    }
    public function querysoma()
    {
        $connection = ConnectionManager::get('default');
        $clientes = $connection->execute(
            "SELECT SUM(paginas * copias) AS Total,
            SUM(paginas1 * copias1) AS Total1,
            SUM(Total + Total1) AS TotalSoma,
            SUM(capa + capa1) AS TotalCapa FROM saalm;"
        )->fetchAll('assoc');
        return $clientes;
    }    
}
