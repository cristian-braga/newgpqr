<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TriagemTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TriagemTable Test Case
 */
class TriagemTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\TriagemTable
     */
    protected $Triagem;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Triagem',
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
        $config = $this->getTableLocator()->exists('Triagem') ? [] : ['className' => TriagemTable::class];
        $this->Triagem = $this->getTableLocator()->get('Triagem', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Triagem);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\TriagemTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\TriagemTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
