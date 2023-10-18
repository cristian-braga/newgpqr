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
 * @property string $turno
 * @property string|null $impressao
 * @property string|null $conferencia
 * @property string|null $envelopamento
 * @property string|null $triagem
 * @property string|null $expedicao
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
        'turno' => true,
        'impressao' => true,
        'conferencia' => true,
        'envelopamento' => true,
        'triagem' => true,
        'expedicao' => true,
    ];
}
