<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SaalmTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SaalmTable Test Case
 */
class SaalmTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\SaalmTable
     */
    protected $Saalm;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Saalm',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Saalm') ? [] : ['className' => SaalmTable::class];
        $this->Saalm = $this->getTableLocator()->get('Saalm', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Saalm);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\SaalmTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
