<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * Ss13e05Fixture
 */
class Ss13e05Fixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'ss13e05';
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
                'data_cadastro' => '2023-09-06',
                'job' => 'Lor',
                'funcionario' => 'Lorem ipsum dolor sit amet',
                'copias' => 1,
                'paginas' => 1,
                'capas' => 1,
                'total' => 1,
                'copias1' => 1,
                'capas1' => 1,
                'paginas1' => 1,
                'total1' => 1,
                'copias2' => 1,
                'paginas2' => 1,
                'capas2' => 1,
                'total2' => 1,
                'copias3' => 1,
                'paginas3' => 1,
                'capas3' => 1,
                'total3' => 1,
                'totaltudo' => 1,
                'totalcapas' => 1,
            ],
        ];
        parent::init();
    }
}
