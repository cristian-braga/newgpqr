<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ContratosTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ContratosTable Test Case
 */
class ContratosTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ContratosTable
     */
    protected $Contratos;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Contratos',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Contratos') ? [] : ['className' => ContratosTable::class];
        $this->Contratos = $this->getTableLocator()->get('Contratos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Contratos);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\ContratosTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
