<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DigitCadastroTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DigitCadastroTable Test Case
 */
class DigitCadastroTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\DigitCadastroTable
     */
    protected $DigitCadastro;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.DigitCadastro',
        'app.Servico',
        'app.DigitConferencia',
        'app.DigitLancamento',
        'app.DigitQualidade',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('DigitCadastro') ? [] : ['className' => DigitCadastroTable::class];
        $this->DigitCadastro = $this->getTableLocator()->get('DigitCadastro', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->DigitCadastro);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\DigitCadastroTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\DigitCadastroTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
