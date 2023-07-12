<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * AtividadeFixture
 */
class AtividadeFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'atividade';
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
                'job' => 'Lorem ip',
                'data_atividade' => '2023-07-12 10:01:17',
                'data_postagem' => '2023-07-12',
                'data_cadastro' => '2023-07-12',
                'funcionario' => 'Lorem ipsum dolor sit amet',
                'remessa_atividade' => 'Lorem ips',
                'quantidade_documentos' => 1,
                'quantidade_folhas' => 1,
                'quantidade_paginas' => 1,
                'recibo_postagem' => 'Lorem ip',
                'servico_id' => 1,
                'status_atividade_id' => 1,
            ],
        ];
        parent::init();
    }
}
