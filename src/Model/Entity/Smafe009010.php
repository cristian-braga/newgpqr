<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Smafe009010 Entity
 *
 * @property int $id
 * @property string|null $servico
 * @property string|null $referencia
 * @property \Cake\I18n\FrozenDate|null $data
 * @property string|null $concurso
 * @property int|null $quantidade_etiquetas
 * @property int|null $job
 * @property string|null $funcionario
 */
class Smafe009010 extends Entity
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
        'servico' => true,
        'referencia' => true,
        'data' => true,
        'concurso' => true,
        'quantidade_etiquetas' => true,
        'job' => true,
        'funcionario' => true,
    ];
}
