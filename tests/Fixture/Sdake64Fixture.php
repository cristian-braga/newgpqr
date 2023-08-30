<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * Sdake64Fixture
 */
class Sdake64Fixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'sdake64';
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
                'dataAtual' => '2023-08-22',
                'funcionario' => 'Lorem ipsum dolor sit amet',
                'total' => 1,
                'total1' => 1,
                'copias1' => 1,
                'paginas1' => 1,
                'total2' => 1,
                'copias2' => 1,
                'paginas2' => 1,
                'totaltudo' => 1,
                'total3' => 1,
                'copias3' => 1,
                'paginas3' => 1,
                'total4' => 1,
                'copias4' => 1,
                'paginas4' => 1,
            ],
        ];
        parent::init();
    }
}
