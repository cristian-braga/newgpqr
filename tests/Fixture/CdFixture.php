<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * CdFixture
 */
class CdFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'cd';
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
                'quantidade' => 1,
                'ocorrencia' => 1,
                'descricao' => 'Lorem ipsum dolor sit amet',
                'dataAtual' => '2023-08-22',
                'funcionario' => 'Lorem ipsum dolor sit amet',
                'solicitante' => 'Lorem ipsum dolor sit amet',
                'cliente' => 'Lorem ipsum dolor sit amet',
                'observacao' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
