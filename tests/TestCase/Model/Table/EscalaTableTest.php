<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\EscalaTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\EscalaTable Test Case
 */
class EscalaTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\EscalaTable
     */
    protected $Escala;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Escala',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Escala') ? [] : ['className' => EscalaTable::class];
        $this->Escala = $this->getTableLocator()->get('Escala', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Escala);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\EscalaTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
