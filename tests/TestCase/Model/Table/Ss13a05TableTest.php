<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\Ss13a05Table;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\Ss13a05Table Test Case
 */
class Ss13a05TableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\Ss13a05Table
     */
    protected $Ss13a05;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Ss13a05',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Ss13a05') ? [] : ['className' => Ss13a05Table::class];
        $this->Ss13a05 = $this->getTableLocator()->get('Ss13a05', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Ss13a05);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\Ss13a05Table::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
