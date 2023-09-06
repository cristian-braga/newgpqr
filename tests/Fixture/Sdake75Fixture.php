<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * Sdake75Fixture
 */
class Sdake75Fixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'sdake75';
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
                'job' => 'Lor',
                'data' => '2023-08-29',
                'funcionario' => 'Lorem ipsum dolor sit amet',
                'total' => 1,
                'total1' => 1,
            ],
        ];
        parent::init();
    }
}
