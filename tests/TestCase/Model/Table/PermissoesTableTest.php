<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PermissoesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PermissoesTable Test Case
 */
class PermissoesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\PermissoesTable
     */
    protected $Permissoes;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Permissoes',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Permissoes') ? [] : ['className' => PermissoesTable::class];
        $this->Permissoes = $this->getTableLocator()->get('Permissoes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Permissoes);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\PermissoesTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
