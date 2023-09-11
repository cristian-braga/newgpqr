<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Servico Model
 *
 * @property \App\Model\Table\AtividadeTable&\Cake\ORM\Association\HasMany $Atividade
 * @property \App\Model\Table\DigitalizacaoTable&\Cake\ORM\Association\HasMany $Digitalizacao
 * @property \App\Model\Table\EnvelopamentoTable&\Cake\ORM\Association\HasMany $Envelopamento
 * @property \App\Model\Table\ExpedicaoTable&\Cake\ORM\Association\HasMany $Expedicao
 * @property \App\Model\Table\ImpressaoTable&\Cake\ORM\Association\HasMany $Impressao
 * @property \App\Model\Table\TriagemTable&\Cake\ORM\Association\HasMany $Triagem
 *
 * @method \App\Model\Entity\Servico newEmptyEntity()
 * @method \App\Model\Entity\Servico newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Servico[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Servico get($primaryKey, $options = [])
 * @method \App\Model\Entity\Servico findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Servico patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Servico[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Servico|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Servico saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Servico[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Servico[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Servico[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Servico[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class ServicoTable extends Table
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

        $this->setTable('servico');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->hasMany('Atividade', [
            'foreignKey' => 'servico_id',
        ]);
        $this->hasMany('Digitalizacao', [
            'foreignKey' => 'servico_id',
        ]);
        $this->hasMany('Envelopamento', [
            'foreignKey' => 'servico_id',
        ]);
        $this->hasMany('Expedicao', [
            'foreignKey' => 'servico_id',
        ]);
        $this->hasMany('Impressao', [
            'foreignKey' => 'servico_id',
        ]);
        $this->hasMany('Triagem', [
            'foreignKey' => 'servico_id',
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
            ->scalar('nome_servico')
            ->maxLength('nome_servico', 45)
            ->allowEmptyString('nome_servico');

        $validator
            ->scalar('descricao_servico')
            ->maxLength('descricao_servico', 45)
            ->allowEmptyString('descricao_servico');

        $validator
            ->scalar('cliente_responsavel_servico')
            ->maxLength('cliente_responsavel_servico', 255)
            ->allowEmptyString('cliente_responsavel_servico');

        $validator
            ->scalar('cliente_servico')
            ->maxLength('cliente_servico', 255)
            ->allowEmptyString('cliente_servico');

        $validator
            ->scalar('correios_servico')
            ->maxLength('correios_servico', 5)
            ->allowEmptyString('correios_servico');

        $validator
            ->scalar('impressao_servico')
            ->maxLength('impressao_servico', 45)
            ->allowEmptyString('impressao_servico');

        $validator
            ->scalar('tipo_impressao_servico')
            ->maxLength('tipo_impressao_servico', 5)
            ->allowEmptyString('tipo_impressao_servico');

        $validator
            ->scalar('tipo_preparo_servico')
            ->maxLength('tipo_preparo_servico', 45)
            ->allowEmptyString('tipo_preparo_servico');

        $validator
            ->scalar('envelopamento_servico')
            ->maxLength('envelopamento_servico', 25)
            ->allowEmptyString('envelopamento_servico');

        $validator
            ->scalar('separador_servico')
            ->maxLength('separador_servico', 12)
            ->allowEmptyString('separador_servico');

        $validator
            ->scalar('entrega_servico')
            ->maxLength('entrega_servico', 25)
            ->allowEmptyString('entrega_servico');

        $validator
            ->scalar('cod_sistema_servico')
            ->maxLength('cod_sistema_servico', 45)
            ->allowEmptyString('cod_sistema_servico');

        $validator
            ->scalar('descricao_sistema_servico')
            ->maxLength('descricao_sistema_servico', 45)
            ->allowEmptyString('descricao_sistema_servico');

        $validator
            ->decimal('valor_servico')
            ->allowEmptyString('valor_servico');

        $validator
            ->integer('folha_rosto')
            ->allowEmptyString('folha_rosto');

        $validator
            ->scalar('ativo')
            ->maxLength('ativo', 45)
            ->allowEmptyString('ativo');

        return $validator;
    }
}
