<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * PermissoesFixture
 */
class PermissoesFixture extends TestFixture
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
                'matricula' => 'Lorem ipsum dolor sit amet',
                'permissao' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
