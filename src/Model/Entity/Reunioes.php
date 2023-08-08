<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

class Reunioes extends Entity
{
    protected $_accessible = [
        'data_reuniao' => true,
        'responsavel' => true,
        'tema_abordado' => true,
        'sumula' => true,
        'local_reuniao' => true,
        'horario_reuniao' => true,
        'pauta' => true,
        'participantes' => true,
    ];
}
