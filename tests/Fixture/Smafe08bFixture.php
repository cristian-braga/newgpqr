<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * Smafe08bFixture
 */
class Smafe08bFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'smafe08b';
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
                'concurso' => 'Lor',
                'job' => 'Lo',
                'referencia' => 'Lorem ipsum dolor sit amet',
                'data' => '2023-08-28',
                'funcionario' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
