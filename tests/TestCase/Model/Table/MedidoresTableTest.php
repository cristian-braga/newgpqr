<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MedidoresTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MedidoresTable Test Case
 */
class MedidoresTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\MedidoresTable
     */
    protected $Medidores;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Medidores',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Medidores') ? [] : ['className' => MedidoresTable::class];
        $this->Medidores = $this->getTableLocator()->get('Medidores', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Medidores);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\MedidoresTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
