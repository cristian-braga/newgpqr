<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Saalm Entity
 *
 * @property int $id
 * @property int|null $copias
 * @property int $paginas
 * @property string $job
 * @property int|null $capa
 * @property \Cake\I18n\FrozenDate $dataAtual
 * @property string $funcionario
 * @property int|null $total
 * @property int|null $total1
 * @property int|null $copias1
 * @property int|null $capa1
 * @property int|null $paginas1
 * @property int|null $total2
 * @property int|null $total3
 */
class Saalm extends Entity
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
        'copias' => true,
        'paginas' => true,
        'job' => true,
        'capa' => true,
        'dataAtual' => true,
        'funcionario' => true,
        'total' => true,
        'total1' => true,
        'copias1' => true,
        'capa1' => true,
        'paginas1' => true,
        'total2' => true,
        'total3' => true,
    ];
}