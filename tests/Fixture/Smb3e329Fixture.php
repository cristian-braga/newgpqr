<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * Smb3e329Fixture
 */
class Smb3e329Fixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'smb3e329';
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
                'copias' => 1,
                'paginas' => 1,
                'job' => 'Lo',
                'capa' => 1,
                'data_cadastro' => '2023-09-19',
                'funcionario' => 'Lorem ipsum dolor sit amet',
                'total' => 1,
                'unidade' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
