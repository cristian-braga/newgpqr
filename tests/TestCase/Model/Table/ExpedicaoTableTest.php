<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ExpedicaoTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ExpedicaoTable Test Case
 */
class ExpedicaoTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ExpedicaoTable
     */
    protected $Expedicao;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Expedicao',
        'app.Atividade',
        'app.Servico',
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
        $config = $this->getTableLocator()->exists('Expedicao') ? [] : ['className' => ExpedicaoTable::class];
        $this->Expedicao = $this->getTableLocator()->get('Expedicao', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Expedicao);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\ExpedicaoTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\ExpedicaoTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
