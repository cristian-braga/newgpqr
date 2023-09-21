<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ControleColaFixture
 */
class ControleColaFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'controle_cola';
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
                'data_operacao' => '2023-09-20',
                'nota' => 'Lorem ipsum dolor sit amet',
                'qtd_entrada' => 1,
                'qtd_saida' => 1,
                'operacao' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
