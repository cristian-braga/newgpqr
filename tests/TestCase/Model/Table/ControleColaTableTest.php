<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ControleColaTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ControleColaTable Test Case
 */
class ControleColaTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ControleColaTable
     */
    protected $ControleCola;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.ControleCola',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('ControleCola') ? [] : ['className' => ControleColaTable::class];
        $this->ControleCola = $this->getTableLocator()->get('ControleCola', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->ControleCola);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\ControleColaTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
