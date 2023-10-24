<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DigitConferenciaTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DigitConferenciaTable Test Case
 */
class DigitConferenciaTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\DigitConferenciaTable
     */
    protected $DigitConferencia;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.DigitConferencia',
        'app.DigitCadastro',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('DigitConferencia') ? [] : ['className' => DigitConferenciaTable::class];
        $this->DigitConferencia = $this->getTableLocator()->get('DigitConferencia', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->DigitConferencia);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\DigitConferenciaTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\DigitConferenciaTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
