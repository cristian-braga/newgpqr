<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;


class Smafe09e10Table extends Table
{

    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('smafe09e10');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');
    }

    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->scalar('sistema')
            ->maxLength('sistema', 10)
            ->allowEmptyString('sistema');

        $validator
            ->scalar('referencia')
            ->maxLength('referencia', 10)
            ->allowEmptyString('referencia');

        $validator
            ->date('data')
            ->allowEmptyDate('data');

        $validator
            ->scalar('concurso')
            ->maxLength('concurso', 10)
            ->allowEmptyString('concurso');

        $validator
            ->integer('quantidade_etiquetas')
            ->allowEmptyString('quantidade_etiquetas');

        $validator
            ->integer('job')
            ->allowEmptyString('job');

        $validator
            ->scalar('funcionario')
            ->maxLength('funcionario', 60)
            ->allowEmptyString('funcionario');

        return $validator;
    }
}
