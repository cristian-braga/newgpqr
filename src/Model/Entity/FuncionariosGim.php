<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * FuncionariosGim Entity
 *
 * @property int $id
 * @property string $nome
 * @property string $matricula
 * @property string $email
 * @property string $tel
 * @property string $contatoAlt
 * @property string $telAlt
 * @property string $endereco
 * @property string $turno
 */
class FuncionariosGim extends Entity
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
        'nome' => true,
        'matricula' => true,
        'email' => true,
        'tel' => true,
        'contatoAlt' => true,
        'telAlt' => true,
        'endereco' => true,
        'turno' => true,
    ];
}
