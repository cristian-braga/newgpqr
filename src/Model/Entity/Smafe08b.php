<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

class Smafe08b extends Entity
{
    
    protected $_accessible = [
        'copias' => true,
        'paginas' => true,
        'total' => true,
        'concurso' => true,
        'job' => true,
        'referencia' => true,
        'data' => true,
        'funcionario' => true,
    ];
}
