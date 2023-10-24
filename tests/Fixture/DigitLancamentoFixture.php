<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * DigitLancamentoFixture
 */
class DigitLancamentoFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'digit_lancamento';
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
                'data_lancamento' => '2023-10-24 09:25:02',
                'data_cadastro' => '2023-10-24',
                'status_digitalizacao' => 'Lorem ipsum dolor sit amet',
                'digit_cadastro_id' => 1,
            ],
        ];
        parent::init();
    }
}
