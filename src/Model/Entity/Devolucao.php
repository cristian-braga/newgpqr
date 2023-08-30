<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Atividade Entity
 *
 * @property int $id
 * @property string|null $job
 * @property \Cake\I18n\FrozenTime|null $data_atividade
 * @property \Cake\I18n\FrozenDate|null $data_postagem
 * @property \Cake\I18n\FrozenDate|null $data_cadastro
 * @property string $funcionario
 * @property string|null $remessa_atividade
 * @property int|null $quantidade_documentos
 * @property int|null $quantidade_folhas
 * @property int|null $quantidade_paginas
 * @property string|null $recibo_postagem
 * @property int|null $servico_id
 * @property int|null $status_atividade_id
 *
 * @property \App\Model\Entity\Servico $servico
 * @property \App\Model\Entity\StatusAtividade $status_atividade
 * @property \App\Model\Entity\Envelopamento[] $envelopamento
 * @property \App\Model\Entity\Expedicao[] $expedicao
 * @property \App\Model\Entity\Impressao[] $impressao
 * @property \App\Model\Entity\Triagem[] $triagem
 */
class Devolucao extends Entity
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
        'job' => true,
        'data_atividade' => true,
        'data_postagem' => true,
        'data_cadastro' => true,
        'funcionario' => true,
        'remessa_atividade' => true,
        'quantidade_documentos' => true,
        'quantidade_folhas' => true,
        'quantidade_paginas' => true,
        'recibo_postagem' => true,
        'servico_id' => true,
        'status_atividade_id' => true,
        'servico' => true,
        'status_atividade' => true,
        'envelopamento' => true,
        'expedicao' => true,
        'impressao' => true,
        'triagem' => true,
    ];
}
