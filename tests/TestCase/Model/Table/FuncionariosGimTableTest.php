<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\FuncionariosGimTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\FuncionariosGimTable Test Case
 */
class FuncionariosGimTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\FuncionariosGimTable
     */
    protected $FuncionariosGim;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.FuncionariosGim',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('FuncionariosGim') ? [] : ['className' => FuncionariosGimTable::class];
        $this->FuncionariosGim = $this->getTableLocator()->get('FuncionariosGim', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->FuncionariosGim);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\FuncionariosGimTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
