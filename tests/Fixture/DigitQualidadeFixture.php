<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * DigitQualidadeFixture
 */
class DigitQualidadeFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'digit_qualidade';
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
                'data_qualidade' => '2023-10-24 09:24:49',
                'data_cadastro' => '2023-10-24',
                'status_digitalizacao' => 'Lorem ipsum dolor sit amet',
                'digit_cadastro_id' => 1,
            ],
        ];
        parent::init();
    }
}
