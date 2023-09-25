<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * EscalaTardeFixture
 */
class EscalaTardeFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'escala_tarde';
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
                'data_inicial' => '2023-09-25',
                'data_final' => '2023-09-25',
                'imp_func1' => 'Lorem ipsum dolor sit amet',
                'conf_func' => 'Lorem ipsum dolor sit amet',
                'env_func' => 'Lorem ipsum dolor sit amet',
                'tri_func1' => 'Lorem ipsum dolor sit amet',
                'tri_func2' => 'Lorem ipsum dolor sit amet',
                'tri_func3' => 'Lorem ipsum dolor sit amet',
                'exp_func' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
