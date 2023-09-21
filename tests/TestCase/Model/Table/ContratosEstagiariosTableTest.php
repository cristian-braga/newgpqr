<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ContratosEstagiariosTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ContratosEstagiariosTable Test Case
 */
class ContratosEstagiariosTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ContratosEstagiariosTable
     */
    protected $ContratosEstagiarios;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.ContratosEstagiarios',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('ContratosEstagiarios') ? [] : ['className' => ContratosEstagiariosTable::class];
        $this->ContratosEstagiarios = $this->getTableLocator()->get('ContratosEstagiarios', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->ContratosEstagiarios);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\ContratosEstagiariosTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
