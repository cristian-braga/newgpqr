<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CdTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CdTable Test Case
 */
class CdTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\CdTable
     */
    protected $Cd;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Cd',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Cd') ? [] : ['className' => CdTable::class];
        $this->Cd = $this->getTableLocator()->get('Cd', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Cd);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\CdTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
