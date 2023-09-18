<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ContratosFixture
 */
class ContratosFixture extends TestFixture
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
                'contrato' => 'Lorem ipsum dolor sit amet',
                'empresa' => 'Lorem ipsum dolor sit amet',
                'maquina' => 'Lorem ipsum dolor sit amet',
                'valo_mensal' => 1,
                'parcelas' => 1,
                'saldo_contratual' => 1,
                'vencimento' => '2023-09-18',
            ],
        ];
        parent::init();
    }
}
