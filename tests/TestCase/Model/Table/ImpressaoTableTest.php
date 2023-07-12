<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ImpressaoTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ImpressaoTable Test Case
 */
class ImpressaoTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ImpressaoTable
     */
    protected $Impressao;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Impressao',
        'app.Atividade',
        'app.Servico',
        'app.StatusAtividade',
        'app.Impressora',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Impressao') ? [] : ['className' => ImpressaoTable::class];
        $this->Impressao = $this->getTableLocator()->get('Impressao', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Impressao);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\ImpressaoTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\ImpressaoTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
