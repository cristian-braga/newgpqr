<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ConferenciaTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ConferenciaTable Test Case
 */
class ConferenciaTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ConferenciaTable
     */
    protected $Conferencia;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Conferencia',
        'app.Atividade',
        'app.StatusAtividade',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Conferencia') ? [] : ['className' => ConferenciaTable::class];
        $this->Conferencia = $this->getTableLocator()->get('Conferencia', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Conferencia);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\ConferenciaTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\ConferenciaTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
