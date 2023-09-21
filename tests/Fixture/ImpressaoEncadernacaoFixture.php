<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ImpressaoEncadernacaoFixture
 */
class ImpressaoEncadernacaoFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'impressao_encadernacao';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'paginas_imp' => 1,
                'copias_imp' => 1,
                'quant_capa' => 'Lor',
                'tipo_capa' => 'Lorem ipsum dolor sit amet',
                'total_imp' => 1,
                'descricao' => 'Lorem ipsum dolor sit amet',
                'ocorrencia' => 'Lore',
                'dataAtual' => '2023-09-12',
                'solicitante' => 'Lorem ipsum dolor sit amet',
                'funcionario' => 'Lorem ipsum dolor sit amet',
                'tipo_imp' => 'Lorem ipsum dolor sit amet',
                'numero_encar' => 1,
            ],
        ];
        parent::init();
    }
}
