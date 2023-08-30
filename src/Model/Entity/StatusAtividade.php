<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

class StatusAtividade extends Entity
{

    protected $_accessible = [
        'status_atual' => true,
        'atividade' => true,
        'envelopamento' => true,
        'expedicao' => true,
        'impressao' => true,
        'triagem' => true,
    ];
}
