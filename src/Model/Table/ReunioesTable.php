<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

class ReunioesTable extends Table
{
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('reunioes');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');
    }

    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->date('data_reuniao')
            ->requirePresence('data_reuniao', 'create')
            ->notEmptyDate('data_reuniao', 'Por favor, preencha o campo data.');

        $validator
            ->scalar('responsavel')
            ->maxLength('responsavel', 255)
            ->requirePresence('responsavel', 'create')
            ->notEmptyString('responsavel', 'Por favor, preencha o campo responsável.');

        $validator
            ->scalar('tema_abordado')
            ->maxLength('tema_abordado', 255)
            ->requirePresence('tema_abordado', 'create')
            ->notEmptyString('tema_abordado', 'Por favor, preencha o campo tema.');

        $validator
            ->scalar('sumula')
            ->maxLength('sumula', 2500)
            ->allowEmptyString('sumula');

        $validator
            ->scalar('local_reuniao')
            ->maxLength('local_reuniao', 255)
            ->requirePresence('local_reuniao', 'create')
            ->notEmptyString('local_reuniao', 'Por favor, preencha o campo local.');

        $validator
            ->time('horario_reuniao')
            ->requirePresence('horario_reuniao', 'create')
            ->notEmptyTime('horario_reuniao', 'Por favor, preencha o campo horário.');

        $validator
            ->scalar('pauta')
            ->maxLength('pauta', 255)
            ->requirePresence('pauta', 'create')
            ->notEmptyString('pauta', 'Por favor, preencha o campo pauta.');

        $validator
            ->scalar('participantes')
            ->maxLength('participantes', 255)
            ->requirePresence('participantes', 'create')
            ->notEmptyString('participantes', 'Por favor, preencha o campo participantes.');

        return $validator;
    }
}
