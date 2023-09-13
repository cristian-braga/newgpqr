<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * EtiquetasPm Model
 *
 * @method \App\Model\Entity\EtiquetasPm newEmptyEntity()
 * @method \App\Model\Entity\EtiquetasPm newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\EtiquetasPm[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\EtiquetasPm get($primaryKey, $options = [])
 * @method \App\Model\Entity\EtiquetasPm findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\EtiquetasPm patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\EtiquetasPm[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\EtiquetasPm|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\EtiquetasPm saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\EtiquetasPm[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\EtiquetasPm[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\EtiquetasPm[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\EtiquetasPm[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class EtiquetasPmTable extends Table
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

        $this->setTable('etiquetas_pm');
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
            ->date('data')
            ->allowEmptyDate('data');

        $validator
            ->scalar('concurso')
            ->maxLength('concurso', 30)
            ->allowEmptyString('concurso');

        $validator
            ->scalar('descricao')
            ->maxLength('descricao', 30)
            ->allowEmptyString('descricao');

        $validator
            ->integer('copias')
            ->allowEmptyString('copias');

        $validator
            ->integer('total')
            ->allowEmptyString('total');

        $validator
            ->integer('quantidade_etiquetas')
            ->allowEmptyString('quantidade_etiquetas');

        return $validator;
    }
}
