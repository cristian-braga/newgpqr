<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * Ss13a05Fixture
 */
class Ss13a05Fixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'ss13a05';
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
                'copias' => 1,
                'capas' => 1,
                'paginas' => 1,
                'total' => 1,
                'total1' => 1,
                'job' => 'Lo',
                'referencia' => 'Lorem ipsum dolor sit amet',
                'data' => '2023-09-06',
                'funcionario' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}