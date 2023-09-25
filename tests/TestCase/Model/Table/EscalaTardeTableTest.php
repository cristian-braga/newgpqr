<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\EscalaTardeTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\EscalaTardeTable Test Case
 */
class EscalaTardeTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\EscalaTardeTable
     */
    protected $EscalaTarde;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.EscalaTarde',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('EscalaTarde') ? [] : ['className' => EscalaTardeTable::class];
        $this->EscalaTarde = $this->getTableLocator()->get('EscalaTarde', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->EscalaTarde);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\EscalaTardeTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
