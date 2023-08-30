<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * SaalmFixture
 */
class SaalmFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'saalm';
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
                'dataAtual' => '2023-08-25',
                'funcionario' => 'Lorem ipsum dolor sit amet',
                'total' => 1,
                'total1' => 1,
                'copias1' => 1,
                'capa1' => 1,
                'paginas1' => 1,
                'total2' => 1,
                'total3' => 1,
            ],
        ];
        parent::init();
    }
}
