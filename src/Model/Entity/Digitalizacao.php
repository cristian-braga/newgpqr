<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Digitalizacao Entity
 *
 * @property int $id
 * @property \Cake\I18n\FrozenTime $data_digitalizacao
 * @property string $funcionario
 * @property \Cake\I18n\FrozenDate $data_cadastro
 * @property \Cake\I18n\FrozenDate $data_postagem
 * @property string $remessa
 * @property int $quantidade_documentos
 * @property string $status_digitalizacao
 * @property string $digitalizado
 * @property int $servico_id
 *
 * @property \App\Model\Entity\Servico $servico
 * @property \App\Model\Entity\DigitConferencia[] $digit_conferencia
 * @property \App\Model\Entity\DigitLancamento[] $digit_lancamento
 * @property \App\Model\Entity\DigitQualidade[] $digit_qualidade
 */
class Digitalizacao extends Entity
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
        'data_digitalizacao' => true,
        'funcionario' => true,
        'data_cadastro' => true,
        'data_postagem' => true,
        'remessa' => true,
        'quantidade_documentos' => true,
        'status_digitalizacao' => true,
        'digitalizado' => true,
        'servico_id' => true,
        'servico' => true,
        'digit_conferencia' => true,
        'digit_lancamento' => true,
        'digit_qualidade' => true,
    ];
}
