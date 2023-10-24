<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DigitQualidadeTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DigitQualidadeTable Test Case
 */
class DigitQualidadeTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\DigitQualidadeTable
     */
    protected $DigitQualidade;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.DigitQualidade',
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
        $config = $this->getTableLocator()->exists('DigitQualidade') ? [] : ['className' => DigitQualidadeTable::class];
        $this->DigitQualidade = $this->getTableLocator()->get('DigitQualidade', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->DigitQualidade);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\DigitQualidadeTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\DigitQualidadeTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
