<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * TriagemFixture
 */
class TriagemFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'triagem';
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
                'data_triagem' => '2023-07-12 10:02:21',
                'atividade_id' => 1,
                'servico_id' => 1,
                'status_atividade_id' => 1,
            ],
        ];
        parent::init();
    }
}
