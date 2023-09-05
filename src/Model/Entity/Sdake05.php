<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Sdake05 Entity
 *
 * @property int $id
 * @property int|null $copias
 * @property int $paginas
 * @property int|null $total
 * @property string $job
 * @property int|null $capa
 * @property string|null $funcionario
 * @property \Cake\I18n\FrozenDate $data_cadastro
 */
class Sdake05 extends Entity
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
        'total' => true,
        'job' => true,
        'capa' => true,
        'funcionario' => true,
        'data_cadastro' => true,
    ];
}
