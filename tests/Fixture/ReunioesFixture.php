<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ReunioesFixture
 */
class ReunioesFixture extends TestFixture
{
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
                'data_reuniao' => '2023-08-08',
                'responsavel' => 'Lorem ipsum dolor sit amet',
                'tema_abordado' => 'Lorem ipsum dolor sit amet',
                'sumula' => 'Lorem ipsum dolor sit amet',
                'local_reuniao' => 'Lorem ipsum dolor sit amet',
                'horario_reuniao' => '14:11:57',
                'pauta' => 'Lorem ipsum dolor sit amet',
                'participantes' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
