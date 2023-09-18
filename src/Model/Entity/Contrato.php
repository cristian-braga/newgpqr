<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Contrato Entity
 *
 * @property int $id
 * @property string $contrato
 * @property string $empresa
 * @property string $maquina
 * @property float $valo_mensal
 * @property int $parcelas
 * @property float $saldo_contratual
 * @property \Cake\I18n\FrozenDate|null $vencimento
 */
class Contrato extends Entity
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
        'contrato' => true,
        'empresa' => true,
        'maquina' => true,
        'valo_mensal' => true,
        'parcelas' => true,
        'saldo_contratual' => true,
        'vencimento' => true,
        'valor_total' => true
    ];
}
