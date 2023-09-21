<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Digitalizacao Entity
 *
 * @property int $id
 * @property string $funcionario
 * @property \Cake\I18n\FrozenDate $data_digitalizacao
 * @property int $quantidade_documentos
 * @property \Cake\I18n\FrozenDate $periodo
 * @property int $servico_id
 *
 * @property \App\Model\Entity\Servico $servico
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
        'funcionario' => true,
        'data_digitalizacao' => true,
        'quantidade_documentos' => true,
        'periodo' => true,
        'servico_id' => true,
        'servico' => true
    ];
}
