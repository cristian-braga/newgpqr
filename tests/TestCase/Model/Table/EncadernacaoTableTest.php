<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\EncadernacaoTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\EncadernacaoTable Test Case
 */
class EncadernacaoTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\EncadernacaoTable
     */
    protected $Encadernacao;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Encadernacao',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Encadernacao') ? [] : ['className' => EncadernacaoTable::class];
        $this->Encadernacao = $this->getTableLocator()->get('Encadernacao', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Encadernacao);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\EncadernacaoTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
