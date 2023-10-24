<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * DigitCadastroFixture
 */
class DigitCadastroFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'digit_cadastro';
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
                'data_digitalizacao' => '2023-10-24 09:24:37',
                'funcionario' => 'Lorem ipsum dolor sit amet',
                'data_cadastro' => '2023-10-24',
                'data_postagem' => '2023-10-24',
                'remessa' => 'Lorem ips',
                'quantidade_documentos' => 1,
                'status_digitalizacao' => 'Lorem ipsum dolor sit amet',
                'servico_id' => 1,
            ],
        ];
        parent::init();
    }
}
