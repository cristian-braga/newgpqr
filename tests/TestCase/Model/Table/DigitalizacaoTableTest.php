<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DigitalizacaoTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DigitalizacaoTable Test Case
 */
class DigitalizacaoTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\DigitalizacaoTable
     */
    protected $Digitalizacao;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Digitalizacao',
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
        $config = $this->getTableLocator()->exists('Digitalizacao') ? [] : ['className' => DigitalizacaoTable::class];
        $this->Digitalizacao = $this->getTableLocator()->get('Digitalizacao', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Digitalizacao);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\DigitalizacaoTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\DigitalizacaoTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test selectServicos method
     *
     * @return void
     * @uses \App\Model\Table\DigitalizacaoTable::selectServicos()
     */
    public function testSelectServicos(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test funcionarioFiltro method
     *
     * @return void
     * @uses \App\Model\Table\DigitalizacaoTable::funcionarioFiltro()
     */
    public function testFuncionarioFiltro(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test servicosFiltro method
     *
     * @return void
     * @uses \App\Model\Table\DigitalizacaoTable::servicosFiltro()
     */
    public function testServicosFiltro(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
