<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\Smafe08bTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\Smafe08bTable Test Case
 */
class Smafe08bTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\Smafe08bTable
     */
    protected $Smafe08b;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Smafe08b',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Smafe08b') ? [] : ['className' => Smafe08bTable::class];
        $this->Smafe08b = $this->getTableLocator()->get('Smafe08b', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Smafe08b);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\Smafe08bTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
