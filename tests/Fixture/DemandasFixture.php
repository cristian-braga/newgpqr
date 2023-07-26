<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * DemandasFixture
 */
class DemandasFixture extends TestFixture
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
                'demanda_resumo' => 'Lorem ipsum dolor sit amet',
                'demanda_descricao' => 'Lorem ipsum dolor sit amet',
                'status' => 'Lorem ipsum dolor sit amet',
                'data_abertura' => '2023-07-13 10:16:20',
                'data_termino' => '2023-07-13 10:16:20',
                'periodo' => '2023-07-13',
                'demanda_prioridade' => 'Lorem ipsum dolor sit amet',
                'demanda_tipo' => 'Lorem ipsum dolor sit amet',
                'demanda_responsavel' => 'Lorem ipsum dolor sit amet',
                'demanda_solicitante' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
