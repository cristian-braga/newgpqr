<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ContratosEstagiariosFixture
 */
class ContratosEstagiariosFixture extends TestFixture
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
                'funcionario' => 'Lorem ipsum dolor sit amet',
                'matricula' => 'Lorem ipsum dolor sit amet',
                'inicio_contrato' => '2023-09-18',
                'fim_contrato' => '2023-09-18',
            ],
        ];
        parent::init();
    }
}
