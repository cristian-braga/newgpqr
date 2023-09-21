<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * RotulosCorreio Entity
 *
 * @property int $id
 * @property string|null $especie
 * @property string|null $status_rotulo
 * @property string|null $funcionario
 * @property \Cake\I18n\FrozenDate|null $data_rotulo
 * @property string|null $destino
 * @property string|null $cep_inicial
 * @property string|null $cep_final
 * @property string|null $servico
 * @property string|null $cliente_servico
 * @property int|null $ano
 */
class RotulosCorreio extends Entity
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
        'especie' => true,
        'status_rotulo' => true,
        'funcionario' => true,
        'data_rotulo' => true,
        'destino' => true,
        'cep_inicial' => true,
        'cep_final' => true,
        'servico' => true,
        'cliente_servico' => true,
        'ano' => true,
    ];
}
