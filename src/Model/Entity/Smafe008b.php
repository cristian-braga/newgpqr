<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Smafe008b Entity
 *
 * @property int $id
 * @property int|null $copias
 * @property int|null $paginas
 * @property int|null $total
 * @property string|null $concurso
 * @property string|null $job
 * @property string|null $referencia
 * @property \Cake\I18n\FrozenDate|null $data
 * @property string|null $funcionario
 */
class Smafe008b extends Entity
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
        'concurso' => true,
        'job' => true,
        'referencia' => true,
        'data' => true,
        'funcionario' => true,
    ];
}
