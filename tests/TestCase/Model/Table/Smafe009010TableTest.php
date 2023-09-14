<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\Smafe009010Table;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\Smafe009010Table Test Case
 */
class Smafe009010TableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\Smafe009010Table
     */
    protected $Smafe009010;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Smafe009010',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Smafe009010') ? [] : ['className' => Smafe009010Table::class];
        $this->Smafe009010 = $this->getTableLocator()->get('Smafe009010', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Smafe009010);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\Smafe009010Table::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
