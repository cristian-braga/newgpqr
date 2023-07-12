<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Expedicao Entity
 *
 * @property int $id
 * @property string $funcionario
 * @property \Cake\I18n\FrozenTime|null $data_lancamento
 * @property \Cake\I18n\FrozenDate|null $data_expedicao
 * @property int|null $capas
 * @property string|null $ocorrencia
 * @property string|null $solicitante
 * @property string|null $responsavel_remessa
 * @property string|null $responsavel_expedicao
 * @property string|null $responsavel_coleta
 * @property string|null $observacao
 * @property \Cake\I18n\Time|null $hora
 * @property int $atividade_id
 * @property int $servico_id
 * @property int $status_atividade_id
 *
 * @property \App\Model\Entity\Atividade $atividade
 * @property \App\Model\Entity\Servico $servico
 * @property \App\Model\Entity\StatusAtividade $status_atividade
 */
class Expedicao extends Entity
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
        'data_lancamento' => true,
        'data_expedicao' => true,
        'capas' => true,
        'ocorrencia' => true,
        'solicitante' => true,
        'responsavel_remessa' => true,
        'responsavel_expedicao' => true,
        'responsavel_coleta' => true,
        'observacao' => true,
        'hora' => true,
        'atividade_id' => true,
        'servico_id' => true,
        'status_atividade_id' => true,
        'atividade' => true,
        'servico' => true,
        'status_atividade' => true,
    ];
}
