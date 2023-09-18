<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * ContratosEstagiario Entity
 *
 * @property int $id
 * @property string $funcionario
 * @property string $matricula
 * @property \Cake\I18n\FrozenDate $inicio_contrato
 * @property \Cake\I18n\FrozenDate $fim_contrato
 */
class ContratosEstagiario extends Entity
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
        'matricula' => true,
        'inicio_contrato' => true,
        'fim_contrato' => true,
    ];
}
