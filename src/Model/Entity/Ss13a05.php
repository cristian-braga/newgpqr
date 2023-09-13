<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

class Ss13a05 extends Entity
{
    protected $_accessible = [
        'copias' => true,
        'capas' => true,
        'paginas' => true,
        'total' => true,
        'job' => true,
        'referencia' => true,
        'data' => true,
        'funcionario' => true,
    ];
}
