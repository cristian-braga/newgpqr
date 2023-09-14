<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ImpressaoEncadernacaoTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ImpressaoEncadernacaoTable Test Case
 */
class ImpressaoEncadernacaoTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ImpressaoEncadernacaoTable
     */
    protected $ImpressaoEncadernacao;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.ImpressaoEncadernacao',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('ImpressaoEncadernacao') ? [] : ['className' => ImpressaoEncadernacaoTable::class];
        $this->ImpressaoEncadernacao = $this->getTableLocator()->get('ImpressaoEncadernacao', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->ImpressaoEncadernacao);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\ImpressaoEncadernacaoTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
