<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ImpInternasFixture
 */
class ImpInternasFixture extends TestFixture
{
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
                'descricao' => 'Lorem ipsum dolor sit amet',
                'paginas' => 1,
                'ocorrencia' => 'Lorem ipsum dolor ',
                'solicitante' => 'Lorem ipsum dolor sit amet',
                'data_cadastro' => '2023-09-11',
                'funcionario' => 'Lorem ipsum dolor sit amet',
                'copias' => 1,
                'total' => 1,
                'tipo' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
