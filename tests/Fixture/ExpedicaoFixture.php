<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ExpedicaoFixture
 */
class ExpedicaoFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'expedicao';
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
                'data_lancamento' => '2023-07-12 10:01:37',
                'data_expedicao' => '2023-07-12',
                'capas' => 1,
                'ocorrencia' => 'Lorem ipsum d',
                'solicitante' => 'Lorem ipsum dolor sit amet',
                'responsavel_remessa' => 'Lorem ipsum dolor sit amet',
                'responsavel_expedicao' => 'Lorem ipsum dolor sit amet',
                'responsavel_coleta' => 'Lorem ipsum dolor sit amet',
                'observacao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
                'hora' => '10:01:37',
                'atividade_id' => 1,
                'servico_id' => 1,
                'status_atividade_id' => 1,
            ],
        ];
        parent::init();
    }
}
