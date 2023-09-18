<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\FuncionarioFeriasTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\FuncionarioFeriasTable Test Case
 */
class FuncionarioFeriasTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\FuncionarioFeriasTable
     */
    protected $FuncionarioFerias;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.FuncionarioFerias',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('FuncionarioFerias') ? [] : ['className' => FuncionarioFeriasTable::class];
        $this->FuncionarioFerias = $this->getTableLocator()->get('FuncionarioFerias', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->FuncionarioFerias);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\FuncionarioFeriasTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
