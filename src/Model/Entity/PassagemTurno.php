<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * PassagemTurno Entity
 *
 * @property int $id
 * @property string $funcionario
 * @property \Cake\I18n\FrozenTime $data_cadastro
 * @property string $turno
 * @property string $etapa
 * @property string $assunto
 * @property string $descricao
 */
class PassagemTurno extends Entity
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
        'funcionario' => true,
        'data_cadastro' => true,
        'turno' => true,
        'etapa' => true,
        'assunto' => true,
        'descricao' => true,
    ];
}
