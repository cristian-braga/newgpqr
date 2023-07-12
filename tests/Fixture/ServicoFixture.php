<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ServicoFixture
 */
class ServicoFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'servico';
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
                'nome_servico' => 'Lorem ipsum dolor sit amet',
                'descricao_servico' => 'Lorem ipsum dolor sit amet',
                'cliente_responsavel_servico' => 'Lorem ipsum dolor sit amet',
                'cliente_servico' => 'Lorem ipsum dolor sit amet',
                'correios_servico' => 'Lor',
                'impressa_servico' => 'Lorem ipsum dolor sit amet',
                'tipo_impressao_servico' => 'Lor',
                'tipo_preparo_servico' => 'Lorem ipsum dolor sit amet',
                'envelopamento_servico' => 'Lorem ipsum dolor sit a',
                'separador_servico' => 'Lorem ipsu',
                'entrega_servico' => 'Lorem ipsum dolor sit a',
                'cod_sistema_servico' => 'Lorem ipsum dolor sit amet',
                'descricao_sistema_servico' => 'Lorem ipsum dolor sit amet',
                'valor_servico' => 1.5,
                'folha_rosto' => 1,
            ],
        ];
        parent::init();
    }
}
