<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\Ss13a15Table;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\Ss13a15Table Test Case
 */
class Ss13a15TableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\Ss13a15Table
     */
    protected $Ss13a15;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Ss13a15',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Ss13a15') ? [] : ['className' => Ss13a15Table::class];
        $this->Ss13a15 = $this->getTableLocator()->get('Ss13a15', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Ss13a15);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\Ss13a15Table::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
