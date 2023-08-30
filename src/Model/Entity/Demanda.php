<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Demanda Entity
 *
 * @property int $id
 * @property string $demanda_resumo
 * @property string $demanda_descricao
 * @property string $status
 * @property \Cake\I18n\FrozenTime $data_abertura
 * @property \Cake\I18n\FrozenTime $data_termino
 * @property \Cake\I18n\FrozenDate $periodo
 * @property string $demanda_prioridade
 * @property string $demanda_tipo
 * @property string $demanda_responsavel
 * @property string $demanda_solicitante
 */
class Demanda extends Entity
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
        'demanda_resumo' => true,
        'demanda_descricao' => true,
        'status' => true,
        'data_abertura' => true,
        'data_termino' => true,
        'demanda_prioridade' => true,
        'demanda_tipo' => true,
        'demanda_responsavel' => true,
        'demanda_solicitante' => true,
        'demanda_log' => true,
        'reabertura' => true
    ];
}
