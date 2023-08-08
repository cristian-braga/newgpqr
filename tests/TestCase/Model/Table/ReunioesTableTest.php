<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ReunioesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ReunioesTable Test Case
 */
class ReunioesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ReunioesTable
     */
    protected $Reunioes;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Reunioes',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Reunioes') ? [] : ['className' => ReunioesTable::class];
        $this->Reunioes = $this->getTableLocator()->get('Reunioes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Reunioes);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\ReunioesTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
