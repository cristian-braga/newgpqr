<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ImpInternasTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ImpInternasTable Test Case
 */
class ImpInternasTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ImpInternasTable
     */
    protected $ImpInternas;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.ImpInternas',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('ImpInternas') ? [] : ['className' => ImpInternasTable::class];
        $this->ImpInternas = $this->getTableLocator()->get('ImpInternas', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->ImpInternas);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\ImpInternasTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
