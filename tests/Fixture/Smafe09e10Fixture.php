<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * Smafe09e10Fixture
 */
class Smafe09e10Fixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'smafe09e10';
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
                'sistema' => 'Lorem ip',
                'referencia' => 'Lorem ip',
                'data' => '2023-08-31',
                'concurso' => 'Lorem ip',
                'quantidade_etiquetas' => 1,
                'job' => 1,
                'funcionario' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
