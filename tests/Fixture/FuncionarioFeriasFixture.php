<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * FuncionarioFeriasFixture
 */
class FuncionarioFeriasFixture extends TestFixture
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
                'funcionario_nome' => 'Lorem ipsum dolor sit amet',
                'qtd_dias' => 1,
                'data_inicio' => '2023-09-14',
                'data_final' => '2023-09-14',
            ],
        ];
        parent::init();
    }
}
