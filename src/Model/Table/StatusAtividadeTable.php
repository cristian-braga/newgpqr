<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * StatusAtividade Model
 *
 * @property \App\Model\Table\AtividadeTable&\Cake\ORM\Association\HasMany $Atividade
 * @property \App\Model\Table\EnvelopamentoTable&\Cake\ORM\Association\HasMany $Envelopamento
 * @property \App\Model\Table\ExpedicaoTable&\Cake\ORM\Association\HasMany $Expedicao
 * @property \App\Model\Table\ImpressaoTable&\Cake\ORM\Association\HasMany $Impressao
 * @property \App\Model\Table\TriagemTable&\Cake\ORM\Association\HasMany $Triagem
 *
 * @method \App\Model\Entity\StatusAtividade newEmptyEntity()
 * @method \App\Model\Entity\StatusAtividade newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\StatusAtividade[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\StatusAtividade get($primaryKey, $options = [])
 * @method \App\Model\Entity\StatusAtividade findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\StatusAtividade patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\StatusAtividade[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\StatusAtividade|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\StatusAtividade saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\StatusAtividade[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\StatusAtividade[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\StatusAtividade[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\StatusAtividade[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class StatusAtividadeTable extends Table
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

        $this->setTable('status_atividade');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->hasMany('Atividade', [
            'foreignKey' => 'status_atividade_id',
        ]);
        $this->hasMany('Envelopamento', [
            'foreignKey' => 'status_atividade_id',
        ]);
        $this->hasMany('Expedicao', [
            'foreignKey' => 'status_atividade_id',
        ]);
        $this->hasMany('Impressao', [
            'foreignKey' => 'status_atividade_id',
        ]);
        $this->hasMany('Triagem', [
            'foreignKey' => 'status_atividade_id',
        ]);
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
            ->scalar('status_atual')
            ->maxLength('status_atual', 45)
            ->requirePresence('status_atual', 'create')
            ->notEmptyString('status_atual');

        return $validator;
    }
}
