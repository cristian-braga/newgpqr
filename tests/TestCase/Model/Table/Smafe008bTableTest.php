<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\Smafe008bTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\Smafe008bTable Test Case
 */
class Smafe008bTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\Smafe008bTable
     */
    protected $Smafe008b;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Smafe008b',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Smafe008b') ? [] : ['className' => Smafe008bTable::class];
        $this->Smafe008b = $this->getTableLocator()->get('Smafe008b', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Smafe008b);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\Smafe008bTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
