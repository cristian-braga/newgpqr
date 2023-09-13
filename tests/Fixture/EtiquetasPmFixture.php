<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * EtiquetasPmFixture
 */
class EtiquetasPmFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'etiquetas_pm';
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
                'data' => '2023-09-12',
                'concurso' => 'Lorem ipsum dolor sit amet',
                'descricao' => 'Lorem ipsum dolor sit amet',
                'copias' => 1,
                'total' => 1,
                'quantidade_etiquetas' => 1,
            ],
        ];
        parent::init();
    }
}
