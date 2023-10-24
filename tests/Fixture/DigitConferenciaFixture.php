<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * DigitConferenciaFixture
 */
class DigitConferenciaFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'digit_conferencia';
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
                'data_conferencia' => '2023-10-24 09:25:12',
                'data_cadastro' => '2023-10-24',
                'status_digitalizacao' => 'Lorem ipsum dolor sit amet',
                'digit_cadastro_id' => 1,
            ],
        ];
        parent::init();
    }
}
