<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\StatusAtividadeTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\StatusAtividadeTable Test Case
 */
class StatusAtividadeTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\StatusAtividadeTable
     */
    protected $StatusAtividade;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.StatusAtividade',
        'app.Atividade',
        'app.Envelopamento',
        'app.Expedicao',
        'app.Impressao',
        'app.Triagem',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('StatusAtividade') ? [] : ['className' => StatusAtividadeTable::class];
        $this->StatusAtividade = $this->getTableLocator()->get('StatusAtividade', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->StatusAtividade);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\StatusAtividadeTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
