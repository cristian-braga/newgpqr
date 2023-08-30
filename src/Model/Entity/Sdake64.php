<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Sdake64 Entity
 *
 * @property int $id
 * @property int|null $copias
 * @property int $paginas
 * @property string $job
 * @property \Cake\I18n\FrozenDate $dataAtual
 * @property string $funcionario
 * @property int|null $total
 * @property int|null $total1
 * @property int|null $copias1
 * @property int|null $paginas1
 * @property int|null $total2
 * @property int|null $copias2
 * @property int|null $paginas2
 * @property int|null $totaltudo
 * @property int|null $total3
 * @property int|null $copias3
 * @property int|null $paginas3
 * @property int|null $total4
 * @property int|null $copias4
 * @property int|null $paginas4
 */
class Sdake64 extends Entity
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
        'dataAtual' => true,
        'funcionario' => true,
        'total' => true,
        'total1' => true,
        'copias1' => true,
        'paginas1' => true,
        'total2' => true,
        'copias2' => true,
        'paginas2' => true,
        'totaltudo' => true,
        'total3' => true,
        'copias3' => true,
        'paginas3' => true,
        'total4' => true,
        'copias4' => true,
        'paginas4' => true,
    ];
}
