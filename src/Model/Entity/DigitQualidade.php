<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * DigitQualidade Entity
 *
 * @property int $id
 * @property string $funcionario
 * @property \Cake\I18n\FrozenTime $data_qualidade
 * @property \Cake\I18n\FrozenDate $data_cadastro
 * @property string $status_digitalizacao
 * @property int $digitalizacao_id
 *
 * @property \App\Model\Entity\Digitalizacao $digitalizacao
 */
class DigitQualidade extends Entity
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
        'data_qualidade' => true,
        'data_cadastro' => true,
        'status_digitalizacao' => true,
        'digitalizacao_id' => true,
        'digitalizacao' => true,
    ];
}
