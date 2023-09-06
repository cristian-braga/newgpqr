<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\Ss13e015Table;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\Ss13e015Table Test Case
 */
class Ss13e015TableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\Ss13e015Table
     */
    protected $Ss13e015;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Ss13e015',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Ss13e015') ? [] : ['className' => Ss13e015Table::class];
        $this->Ss13e015 = $this->getTableLocator()->get('Ss13e015', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Ss13e015);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\Ss13e015Table::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
