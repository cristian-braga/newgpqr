<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\Sdake64Table;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\Sdake64Table Test Case
 */
class Sdake64TableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\Sdake64Table
     */
    protected $Sdake64;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Sdake64',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Sdake64') ? [] : ['className' => Sdake64Table::class];
        $this->Sdake64 = $this->getTableLocator()->get('Sdake64', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Sdake64);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\Sdake64Table::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
