<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\Sdg1Table;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\Sdg1Table Test Case
 */
class Sdg1TableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\Sdg1Table
     */
    protected $Sdg1;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Sdg1',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Sdg1') ? [] : ['className' => Sdg1Table::class];
        $this->Sdg1 = $this->getTableLocator()->get('Sdg1', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Sdg1);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\Sdg1Table::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
