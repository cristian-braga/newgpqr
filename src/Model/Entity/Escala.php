<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Escala Entity
 *
 * @property int $id
 * @property \Cake\I18n\FrozenDate $data_inicial
 * @property \Cake\I18n\FrozenDate $data_final
 * @property string $imp_func1
 * @property string $imp_func2
 * @property string $conf_func
 * @property string $env_func
 * @property string $tri_func1
 * @property string $tru_func2
 * @property string $tri_func3
 * @property string $exp_func
 */
class Escala extends Entity
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
        'data_inicial' => true,
        'data_final' => true,
        'imp_func1' => true,
        'imp_func2' => true,
        'conf_func' => true,
        'env_func' => true,
        'tri_func1' => true,
        'tru_func2' => true,
        'tri_func3' => true,
        'exp_func' => true,
    ];
}
