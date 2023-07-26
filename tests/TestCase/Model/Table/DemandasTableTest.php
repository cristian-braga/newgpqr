<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DemandasTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DemandasTable Test Case
 */
class DemandasTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\DemandasTable
     */
    protected $Demandas;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Demandas',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Demandas') ? [] : ['className' => DemandasTable::class];
        $this->Demandas = $this->getTableLocator()->get('Demandas', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Demandas);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\DemandasTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
