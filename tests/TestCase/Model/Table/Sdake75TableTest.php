<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\Sdake75Table;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\Sdake75Table Test Case
 */
class Sdake75TableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\Sdake75Table
     */
    protected $Sdake75;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Sdake75',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Sdake75') ? [] : ['className' => Sdake75Table::class];
        $this->Sdake75 = $this->getTableLocator()->get('Sdake75', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Sdake75);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\Sdake75Table::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
