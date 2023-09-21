<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * EtiquetasPm Entity
 *
 * @property int $id
 * @property \Cake\I18n\FrozenDate|null $data
 * @property string|null $concurso
 * @property string|null $descricao
 * @property int|null $copias
 * @property int|null $total
 * @property int|null $quantidade_etiquetas
 */
class EtiquetasPm extends Entity
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
        'data' => true,
        'concurso' => true,
        'descricao' => true,
        'copias' => true,
        'total' => true,
        'quantidade_etiquetas' => true,
    ];
}
