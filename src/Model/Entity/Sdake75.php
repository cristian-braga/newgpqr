<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;


class Sdake75 extends Entity
{

    protected $_accessible = [
        'copias' => true,
        'paginas' => true,
        'job' => true,
        'data' => true,
        'funcionario' => true,
        'total' => true,
        'total1' => true,
    ];
}
