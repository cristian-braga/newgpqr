<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * DigitalizacaoFixture
 */
class DigitalizacaoFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'digitalizacao';
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
                'data_digitalizacao' => '2023-08-18',
                'quantidade_documentos' => 1,
                'periodo' => '2023-08-18',
                'servico_id' => 1,
                'status_digitalizacao_id' => 1,
            ],
        ];
        parent::init();
    }
}
