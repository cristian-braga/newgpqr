<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Servico Entity
 *
 * @property int $id
 * @property string|null $nome_servico
 * @property string|null $descricao_servico
 * @property string|null $cliente_responsavel_servico
 * @property string|null $cliente_servico
 * @property string|null $correios_servico
 * @property string|null $impressa_servico
 * @property string|null $tipo_impressao_servico
 * @property string|null $tipo_preparo_servico
 * @property string|null $envelopamento_servico
 * @property string|null $separador_servico
 * @property string|null $entrega_servico
 * @property string|null $cod_sistema_servico
 * @property string|null $descricao_sistema_servico
 * @property string|null $valor_servico
 * @property int|null $folha_rosto
 *
 * @property \App\Model\Entity\Atividade[] $atividade
 * @property \App\Model\Entity\Digitalizacao[] $digitalizacao
 * @property \App\Model\Entity\Envelopamento[] $envelopamento
 * @property \App\Model\Entity\Expedicao[] $expedicao
 * @property \App\Model\Entity\Impressao[] $impressao
 * @property \App\Model\Entity\Triagem[] $triagem
 */
class Servico extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array<string, bool>
     */
    protected $_accessible = [
        'nome_servico' => true,
        'descricao_servico' => true,
        'cliente_responsavel_servico' => true,
        'cliente_servico' => true,
        'correios_servico' => true,
        'impressa_servico' => true,
        'tipo_impressao_servico' => true,
        'tipo_preparo_servico' => true,
        'envelopamento_servico' => true,
        'separador_servico' => true,
        'entrega_servico' => true,
        'cod_sistema_servico' => true,
        'descricao_sistema_servico' => true,
        'valor_servico' => true,
        'folha_rosto' => true,
        'atividade' => true,
        'digitalizacao' => true,
        'envelopamento' => true,
        'expedicao' => true,
        'impressao' => true,
        'triagem' => true,
    ];
}
