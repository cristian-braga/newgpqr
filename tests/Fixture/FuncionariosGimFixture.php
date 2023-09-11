<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * FuncionariosGimFixture
 */
class FuncionariosGimFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'funcionarios_gim';
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
                'nome' => 'Lorem ipsum dolor sit amet',
                'matricula' => 'Lorem ipsum dolor sit amet',
                'email' => 'Lorem ipsum dolor sit amet',
                'tel' => '',
                'contatoAlt' => 'Lorem ipsum dolor sit amet',
                'telAlt' => '',
                'endereco' => 'Lorem ipsum dolor sit amet',
                'turno' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
