<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Smb3e329 Entity
 *
 * @property int $id
 * @property int|null $copias
 * @property int $paginas
 * @property string $job
 * @property int|null $capa
 * @property \Cake\I18n\FrozenDate $data_cadastro
 * @property string $funcionario
 * @property int|null $total
 * @property string $unidade
 */
class Smb3e329 extends Entity
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
        'data_cadastro' => true,
        'funcionario' => true,
        'total' => true,
        'unidade' => true,
    ];
}
