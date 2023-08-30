<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Cd Entity
 *
 * @property int $id
 * @property int $quantidade
 * @property int $ocorrencia
 * @property string $descricao
 * @property \Cake\I18n\FrozenDate $dataAtual
 * @property string $funcionario
 * @property string $solicitante
 * @property string $cliente
 * @property string|null $observacao
 */
class Cd extends Entity
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
        'quantidade' => true,
        'ocorrencia' => true,
        'descricao' => true,
        'dataAtual' => true,
        'funcionario' => true,
        'solicitante' => true,
        'cliente' => true,
        'observacao' => true,
    ];
}
