<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

class Smafe008Table extends Table
{
    
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('smafe008');
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
            ->allowEmptyString('paginas');

        $validator
            ->integer('copias1')
            ->allowEmptyString('copias1');

        $validator
            ->integer('paginas1')
            ->allowEmptyString('paginas1');    

        $validator
            ->integer('total')
            ->allowEmptyString('total');

        $validator 
            ->integer('total1')
            ->allowEmptyString('total1');

        $validator
            ->integer('totaltudo')
            ->allowEmptyString('totaltudo');

        $validator
            ->scalar('concurso')
            ->maxLength('concurso', 5)
            ->allowEmptyString('concurso');

        $validator
            ->scalar('job')
            ->maxLength('job', 4)
            ->allowEmptyString('job');

        $validator
            ->scalar('referencia')
            ->maxLength('referencia', 30)
            ->allowEmptyString('referencia');

        $validator
            ->date('data')
            ->allowEmptyDate('data');

        $validator
            ->scalar('funcionario')
            ->maxLength('funcionario', 40)
            ->allowEmptyString('funcionario');

        return $validator;
    }
}