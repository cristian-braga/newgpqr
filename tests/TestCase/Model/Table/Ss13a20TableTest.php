<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\Ss13a20Table;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\Ss13a20Table Test Case
 */
class Ss13a20TableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\Ss13a20Table
     */
    protected $Ss13a20;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Ss13a20',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Ss13a20') ? [] : ['className' => Ss13a20Table::class];
        $this->Ss13a20 = $this->getTableLocator()->get('Ss13a20', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Ss13a20);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\Ss13a20Table::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
