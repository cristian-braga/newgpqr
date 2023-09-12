<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * EncadernacaoFixture
 */
class EncadernacaoFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'encadernacao';
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
                'descricao' => 'Lorem ipsum dolor sit amet',
                'paginas' => 1,
                'ocorrencia' => 'Lorem ipsum dolor ',
                'solicitante' => 'Lorem ipsum dolor sit amet',
                'data_cadastro' => '2023-09-12',
                'funcionario' => 'Lorem ipsum dolor sit amet',
                'tipo_capa' => 'Lorem ipsum dolor sit amet',
                'copias' => 1,
                'total' => 1,
                'capas' => 1,
            ],
        ];
        parent::init();
    }
}
