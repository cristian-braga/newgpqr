<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\EtiquetasPmTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\EtiquetasPmTable Test Case
 */
class EtiquetasPmTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\EtiquetasPmTable
     */
    protected $EtiquetasPm;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.EtiquetasPm',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('EtiquetasPm') ? [] : ['className' => EtiquetasPmTable::class];
        $this->EtiquetasPm = $this->getTableLocator()->get('EtiquetasPm', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->EtiquetasPm);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\EtiquetasPmTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
