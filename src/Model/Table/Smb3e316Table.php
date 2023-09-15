<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\Datasource\ConnectionManager;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

class Smb3e316Table extends Table
{
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('smb3e316');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->hasMany('Smb3e316Cidades', [
            'foreignKey' => 'cidade_id',
        ]);
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
            ->scalar('unidade')
            ->maxLength('unidade', 60)
            ->requirePresence('unidade', 'create')
            ->notEmptyString('unidade');
        
        $validator
            ->scalar('codig_cidades')
            ->maxLength('codig_cidades', 60)
            ->requirePresence('codig_cidades', 'create')
            ->notEmptyString('codig_cidades');


        return $validator;
    }
}