<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ConferenciaFixture
 */
class ConferenciaFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'conferencia';
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
                'funcionario' => 'Lorem ipsum dolor sit amet',
                'data_conferencia' => '2023-07-31 10:56:43',
                'atividade_id' => 1,
                'status_atividade_id' => 1,
            ],
        ];
        parent::init();
    }
}
