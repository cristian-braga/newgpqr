<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\Ss13e05Table;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\Ss13e05Table Test Case
 */
class Ss13e05TableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\Ss13e05Table
     */
    protected $Ss13e05;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Ss13e05',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Ss13e05') ? [] : ['className' => Ss13e05Table::class];
        $this->Ss13e05 = $this->getTableLocator()->get('Ss13e05', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Ss13e05);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\Ss13e05Table::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
