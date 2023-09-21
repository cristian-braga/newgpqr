<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * ControleCola Entity
 *
 * @property int $id
 * @property string|null $funcionario
 * @property \Cake\I18n\FrozenDate|null $data_operacao
 * @property string|null $operacao
 * @property int|null $quantidade
 * @property string|null $nota
 */
class ControleCola extends Entity
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
        'data_operacao' => true,
        'operacao' => true,
        'quantidade' => true,
        'nota' => true
    ];
}
