<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * MedidoresFixture
 */
class MedidoresFixture extends TestFixture
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
                'nuv1_medidor1' => 1,
                'nuv1_medidor2' => 1,
                'nuv2_medidor1' => 1,
                'nuv2_medidor2' => 1,
                'referencia' => '2023-09-18',
            ],
        ];
        parent::init();
    }
}
