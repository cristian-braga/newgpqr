<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;


class Sdake75Table extends Table
{

    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('sdake75');
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
            ->maxLength('job', 5)
            ->requirePresence('job', 'create')
            ->notEmptyString('job');

        $validator
            ->date('data')
            ->requirePresence('data', 'create')
            ->notEmptyDate('data');

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

        return $validator;
    }
}
