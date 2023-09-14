<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;


class ImpressaoEncadernacaoTable extends Table
{
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('impressao_encadernacao');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');
    }

    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->integer('paginas_imp')
            ->allowEmptyString('paginas_imp');

        $validator
            ->integer('copias_imp')
            ->allowEmptyString('copias_imp');

        $validator
            ->scalar('quant_capa')
            ->maxLength('quant_capa', 5)
            ->allowEmptyString('quant_capa');

        $validator
            ->scalar('tipo_capa')
            ->maxLength('tipo_capa', 45)
            ->allowEmptyString('tipo_capa');

        $validator
            ->integer('total_imp')
            ->allowEmptyString('total_imp');

        $validator
            ->scalar('descricao')
            ->maxLength('descricao', 45)
            ->allowEmptyString('descricao');

        $validator
            ->scalar('ocorrencia')
            ->maxLength('ocorrencia', 6)
            ->allowEmptyString('ocorrencia');

        $validator
            ->date('dataAtual')
            ->allowEmptyDate('dataAtual');

        $validator
            ->scalar('solicitante')
            ->maxLength('solicitante', 45)
            ->allowEmptyString('solicitante');

        $validator
            ->scalar('funcionario')
            ->maxLength('funcionario', 45)
            ->allowEmptyString('funcionario');

        $validator
            ->scalar('tipo_imp')
            ->maxLength('tipo_imp', 45)
            ->allowEmptyString('tipo_imp');

        $validator
            ->integer('numero_encar')
            ->allowEmptyString('numero_encar');

        return $validator;
    }
}
