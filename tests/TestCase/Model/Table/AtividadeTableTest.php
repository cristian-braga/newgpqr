<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AtividadeTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AtividadeTable Test Case
 */
class AtividadeTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\AtividadeTable
     */
    protected $Atividade;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Atividade',
        'app.Servico',
        'app.StatusAtividade',
        'app.Envelopamento',
        'app.Expedicao',
        'app.Impressao',
        'app.Triagem',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Atividade') ? [] : ['className' => AtividadeTable::class];
        $this->Atividade = $this->getTableLocator()->get('Atividade', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Atividade);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\AtividadeTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\AtividadeTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
