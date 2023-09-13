<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * ImpInterna Entity
 *
 * @property int $id
 * @property string $descricao
 * @property int $paginas
 * @property string $ocorrencia
 * @property string|null $solicitante
 * @property \Cake\I18n\FrozenDate $data_cadastro
 * @property string $funcionario
 * @property int $copias
 * @property int|null $total
 * @property string|null $tipo
 */
class ImpInterna extends Entity
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
        'descricao' => true,
        'documentos' => true,
        'ocorrencia' => true,
        'solicitante' => true,
        'data_cadastro' => true,
        'funcionario' => true,
        'copias' => true,
        'total' => true,
        'tipo' => true,
    ];
}
