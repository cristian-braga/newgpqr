<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;
class ImpressaoEncadernacao extends Entity
{
    protected $_accessible = [
        'paginas_imp' => true,
        'copias_imp' => true,
        'quant_capa' => true,
        'tipo_capa' => true,
        'total_imp' => true,
        'descricao' => true,
        'ocorrencia' => true,
        'dataAtual' => true,
        'solicitante' => true,
        'funcionario' => true,
        'tipo_imp' => true,
        'numero_encar' => true,
    ];
}
