<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * StatusAtividadeFixture
 */
class StatusAtividadeFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'status_atividade';
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
                'status_atual' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
