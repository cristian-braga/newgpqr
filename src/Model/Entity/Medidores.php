<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Medidore Entity
 *
 * @property int $id
 * @property int $nuv1_medidor1
 * @property int $nuv1_medidor2
 * @property int $nuv2_medidor1
 * @property int $nuv2_medidor2
 * @property \Cake\I18n\FrozenDate $referencia
 */
class Medidores extends Entity
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
        'data_cadastro' => true,
        'nuv1_medidor1' => true,
        'nuv1_medidor2' => true,
        'nuv2_medidor1' => true,
        'nuv2_medidor2' => true,
    ];
}
