<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * Smb3e316Fixture
 */
class Smb3e316Fixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'smb3e316';
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
                'job' => 'Lor',
                'capa' => 1,
                'dataAtual' => '2023-08-28',
                'funcionario' => 'Lorem ipsum dolor sit amet',
                'total' => 1,
                'unidade' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
