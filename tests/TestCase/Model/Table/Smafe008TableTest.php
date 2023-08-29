<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\Smafe008Table;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\Smafe008Table Test Case
 */
class Smafe008TableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\Smafe008Table
     */
    protected $Smafe008;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Smafe008',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Smafe008') ? [] : ['className' => Smafe008Table::class];
        $this->Smafe008 = $this->getTableLocator()->get('Smafe008', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Smafe008);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\Smafe008Table::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
