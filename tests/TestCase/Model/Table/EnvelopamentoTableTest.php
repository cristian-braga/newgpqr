<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\EnvelopamentoTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\EnvelopamentoTable Test Case
 */
class EnvelopamentoTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\EnvelopamentoTable
     */
    protected $Envelopamento;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Envelopamento',
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
        $config = $this->getTableLocator()->exists('Envelopamento') ? [] : ['className' => EnvelopamentoTable::class];
        $this->Envelopamento = $this->getTableLocator()->get('Envelopamento', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Envelopamento);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\EnvelopamentoTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\EnvelopamentoTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
