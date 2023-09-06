<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\Sdake05Table;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\Sdake05Table Test Case
 */
class Sdake05TableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\Sdake05Table
     */
    protected $Sdake05;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Sdake05',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Sdake05') ? [] : ['className' => Sdake05Table::class];
        $this->Sdake05 = $this->getTableLocator()->get('Sdake05', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Sdake05);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\Sdake05Table::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
