<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Impressora Model
 *
 * @property \App\Model\Table\ImpressaoTable&\Cake\ORM\Association\HasMany $Impressao
 *
 * @method \App\Model\Entity\Impressora newEmptyEntity()
 * @method \App\Model\Entity\Impressora newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Impressora[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Impressora get($primaryKey, $options = [])
 * @method \App\Model\Entity\Impressora findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Impressora patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Impressora[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Impressora|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Impressora saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Impressora[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Impressora[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Impressora[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Impressora[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class ImpressoraTable extends Table
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

        $this->setTable('impressora');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->hasMany('Impressao', [
            'foreignKey' => 'impressora_id',
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
            ->scalar('nome_impressora')
            ->maxLength('nome_impressora', 99)
            ->requirePresence('nome_impressora', 'create')
            ->notEmptyString('nome_impressora');

        return $validator;
    }
}
