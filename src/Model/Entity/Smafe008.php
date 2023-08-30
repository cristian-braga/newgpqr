<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

class Smafe008 extends Entity
{
    
    protected $_accessible = [
        'copias' => true,
        'paginas' => true,
        'copias1' => true,
        'paginas1' => true,
        'total' => true,
        'total1' => true,
        'totaltudo' => true,
        'concurso' => true,
        'job' => true,
        'referencia' => true,
        'data' => true,
        'funcionario' => true,
    ];
}
