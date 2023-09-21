<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\RotulosCorreiosTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\RotulosCorreiosTable Test Case
 */
class RotulosCorreiosTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\RotulosCorreiosTable
     */
    protected $RotulosCorreios;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.RotulosCorreios',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('RotulosCorreios') ? [] : ['className' => RotulosCorreiosTable::class];
        $this->RotulosCorreios = $this->getTableLocator()->get('RotulosCorreios', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->RotulosCorreios);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\RotulosCorreiosTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
