<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\Smb3e316Table;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\Smb3e316Table Test Case
 */
class Smb3e316TableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\Smb3e316Table
     */
    protected $Smb3e316;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Smb3e316',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Smb3e316') ? [] : ['className' => Smb3e316Table::class];
        $this->Smb3e316 = $this->getTableLocator()->get('Smb3e316', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Smb3e316);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\Smb3e316Table::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
