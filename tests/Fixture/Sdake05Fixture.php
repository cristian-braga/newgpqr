<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * Sdake05Fixture
 */
class Sdake05Fixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'sdake05';
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
                'paginas' => 1,
                'total' => 1,
                'job' => 'Lo',
                'capa' => 1,
                'funcionario' => 'Lorem ipsum dolor sit amet',
                'data_cadastro' => '2023-09-05',
            ],
        ];
        parent::init();
    }
}
