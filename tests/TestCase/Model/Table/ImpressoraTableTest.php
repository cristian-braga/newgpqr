<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ImpressoraTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ImpressoraTable Test Case
 */
class ImpressoraTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ImpressoraTable
     */
    protected $Impressora;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Impressora',
        'app.Impressao',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Impressora') ? [] : ['className' => ImpressoraTable::class];
        $this->Impressora = $this->getTableLocator()->get('Impressora', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Impressora);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\ImpressoraTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
