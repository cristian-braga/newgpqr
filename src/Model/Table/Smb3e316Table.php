<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;
use Cake\Datasource\ConnectionManager;

/**
 * Smb3e316 Model
 *
 * @method \App\Model\Entity\Smb3e316 newEmptyEntity()
 * @method \App\Model\Entity\Smb3e316 newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Smb3e316[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Smb3e316 get($primaryKey, $options = [])
 * @method \App\Model\Entity\Smb3e316 findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Smb3e316 patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Smb3e316[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Smb3e316|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Smb3e316 saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Smb3e316[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Smb3e316[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Smb3e316[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Smb3e316[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class Smb3e316Table extends Table
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

        $this->setTable('smb3e316');
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
            ->integer('cod_cidade')
            ->allowEmptyString('cod_cidade');

        $validator
            ->scalar('unidade')
            ->maxLength('unidade', 60)
            ->requirePresence('unidade', 'create')
            ->notEmptyString('unidade');

        return $validator;
    }
    public function queryMultas()
    {
        $connection = ConnectionManager::get('default');

        $query = $connection->execute(
            "SELECT * FROM newgpqr.smb3e316_cidades;"
        )->fetchAll('assoc');

        return $query;
    }
}
