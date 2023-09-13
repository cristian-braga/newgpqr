<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * Smafe009010Fixture
 */
class Smafe009010Fixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'smafe009010';
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
                'servico' => 'Lorem ip',
                'referencia' => 'Lorem ip',
                'data' => '2023-09-13',
                'concurso' => 'Lorem ip',
                'quantidade_etiquetas' => 1,
                'job' => 1,
                'funcionario' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
