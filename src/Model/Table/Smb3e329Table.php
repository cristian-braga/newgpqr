<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;
use Cake\Datasource\ConnectionManager;

class Smb3e329Table extends Table
{
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('smb3e329');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');
    }

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
            ->maxLength('job', 4)
            ->requirePresence('job', 'create')
            ->notEmptyString('job');

        $validator
            ->integer('capa')
            ->allowEmptyString('capa');

        $validator
            ->date('data_cadastro')
            ->requirePresence('data_cadastro', 'create')
            ->notEmptyDate('data_cadastro');

        $validator
            ->scalar('funcionario')
            ->maxLength('funcionario', 60)
            ->requirePresence('funcionario', 'create')
            ->notEmptyString('funcionario');

        $validator
            ->integer('total')
            ->allowEmptyString('total');

        $validator
            ->scalar('unidade')
            ->maxLength('unidade', 100)
            ->requirePresence('unidade', 'create')
            ->notEmptyString('unidade');

        return $validator;
    }

    public function queryCidades()
    {
        $connection = ConnectionManager::get('default');

        $query = $connection->execute(
            "SELECT * FROM newgpqr.smb3e316_cidades;"
        )->fetchAll('assoc');

        return $query;
    }
}
