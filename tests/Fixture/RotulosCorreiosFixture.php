<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * RotulosCorreiosFixture
 */
class RotulosCorreiosFixture extends TestFixture
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
                'especie' => 'Lorem ip',
                'status_rotulo' => 'Lorem ipsum dolor sit amet',
                'funcionario' => 'Lorem ipsum dolor sit amet',
                'data_rotulo' => '2023-09-21',
                'destino' => 'Lorem ipsum dolor sit amet',
                'cep_inicial' => 'Lorem ipsum dolor sit amet',
                'cep_final' => 'Lorem ipsum dolor sit amet',
                'servico' => 'Lorem ipsum dolor sit amet',
                'cliente_servico' => 'Lorem ipsum dolor sit amet',
                'ano' => 1,
            ],
        ];
        parent::init();
    }
}
