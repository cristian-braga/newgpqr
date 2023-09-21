<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * Sdg1Fixture
 */
class Sdg1Fixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'sdg1';
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
                'capa' => 1,
                'dataAtual' => '2023-09-05',
                'funcionario' => 'Lorem ipsum dolor sit amet',
                'total' => 1,
            ],
        ];
        parent::init();
    }
}
