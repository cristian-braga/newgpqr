<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PassagemTurnoTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PassagemTurnoTable Test Case
 */
class PassagemTurnoTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\PassagemTurnoTable
     */
    protected $PassagemTurno;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.PassagemTurno',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('PassagemTurno') ? [] : ['className' => PassagemTurnoTable::class];
        $this->PassagemTurno = $this->getTableLocator()->get('PassagemTurno', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->PassagemTurno);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\PassagemTurnoTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
