<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\Smafe09e10Table;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\Smafe09e10Table Test Case
 */
class Smafe09e10TableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\Smafe09e10Table
     */
    protected $Smafe09e10;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Smafe09e10',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Smafe09e10') ? [] : ['className' => Smafe09e10Table::class];
        $this->Smafe09e10 = $this->getTableLocator()->get('Smafe09e10', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Smafe09e10);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\Smafe09e10Table::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
