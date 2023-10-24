<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DigitLancamentoTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DigitLancamentoTable Test Case
 */
class DigitLancamentoTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\DigitLancamentoTable
     */
    protected $DigitLancamento;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.DigitLancamento',
        'app.DigitCadastro',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('DigitLancamento') ? [] : ['className' => DigitLancamentoTable::class];
        $this->DigitLancamento = $this->getTableLocator()->get('DigitLancamento', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->DigitLancamento);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\DigitLancamentoTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\DigitLancamentoTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
