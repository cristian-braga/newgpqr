<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * EscalaFixture
 */
class EscalaFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'escala';
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
                'data_inicial' => '2023-10-03',
                'data_final' => '2023-10-03',
                'turno' => 'Lorem ip',
                'impressao' => 'Lorem ipsum dolor sit amet',
                'conferencia' => 'Lorem ipsum dolor sit amet',
                'envelopamento' => 'Lorem ipsum dolor sit amet',
                'triagem' => 'Lorem ipsum dolor sit amet',
                'expedicao' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
