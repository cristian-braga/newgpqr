<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;
use Cake\Datasource\ConnectionManager;

class RotulosCorreiosTable extends Table
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

        $this->setTable('rotulos_correios');
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
            ->scalar('especie')
            ->maxLength('especie', 10)
            ->allowEmptyString('especie');

        $validator
            ->scalar('status_rotulo')
            ->maxLength('status_rotulo', 30)
            ->allowEmptyString('status_rotulo');

        $validator
            ->scalar('funcionario')
            ->maxLength('funcionario', 30)
            ->allowEmptyString('funcionario');

        $validator
            ->date('data_rotulo')
            ->allowEmptyDate('data_rotulo');

        $validator
            ->scalar('destino')
            ->maxLength('destino', 30)
            ->allowEmptyString('destino');

        $validator
            ->scalar('cep_inicial')
            ->maxLength('cep_inicial', 30)
            ->allowEmptyString('cep_inicial');

        $validator
            ->scalar('cep_final')
            ->maxLength('cep_final', 30)
            ->allowEmptyString('cep_final');

        $validator
            ->scalar('servico')
            ->maxLength('servico', 60)
            ->allowEmptyString('servico');

        $validator
            ->scalar('cliente_servico')
            ->maxLength('cliente_servico', 99)
            ->allowEmptyString('cliente_servico');

        $validator
            ->integer('ano')
            ->allowEmptyString('ano');

        return $validator;
    }
    public function queryServicos()
    {
        $connection = ConnectionManager::get('default');

        $query = $connection->execute(
            "SELECT * FROM servico
            WHERE ativo LIKE 'Sim%'
            ORDER BY nome_servico Asc;"
        )->fetchAll('assoc');

        return $query;
    }
}