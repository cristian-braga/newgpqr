<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * StatusAtividade Entity
 *
 * @property int $id
 * @property string $status_atual
 *
 * @property \App\Model\Entity\Atividade[] $atividade
 * @property \App\Model\Entity\Envelopamento[] $envelopamento
 * @property \App\Model\Entity\Expedicao[] $expedicao
 * @property \App\Model\Entity\Impressao[] $impressao
 * @property \App\Model\Entity\Triagem[] $triagem
 */
class StatusAtividade extends Entity
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
        'status_atual' => true,
        'atividade' => true,
        'envelopamento' => true,
        'expedicao' => true,
        'impressao' => true,
        'triagem' => true,
    ];
}
