<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ServicosAnuladosTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ServicosAnuladosTable Test Case
 */
class ServicosAnuladosTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ServicosAnuladosTable
     */
    protected $ServicosAnulados;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.ServicosAnulados',
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
        $config = $this->getTableLocator()->exists('ServicosAnulados') ? [] : ['className' => ServicosAnuladosTable::class];
        $this->ServicosAnulados = $this->getTableLocator()->get('ServicosAnulados', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->ServicosAnulados);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\ServicosAnuladosTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\ServicosAnuladosTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
