<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Triagem Entity
 *
 * @property int $id
 * @property string $funcionario
 * @property \Cake\I18n\FrozenTime|null $data_triagem
 * @property int $atividade_id
 * @property int $servico_id
 * @property int $status_atividade_id
 *
 * @property \App\Model\Entity\Atividade $atividade
 * @property \App\Model\Entity\Servico $servico
 * @property \App\Model\Entity\StatusAtividade $status_atividade
 */
class Triagem extends Entity
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
        'data_triagem' => true,
        'atividade_id' => true,
        'status_atividade_id' => true,
        'atividade' => true,
        'status_atividade' => true,
    ];
}
