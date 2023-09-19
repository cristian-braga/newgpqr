<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\Smb3e329Table;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\Smb3e329Table Test Case
 */
class Smb3e329TableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\Smb3e329Table
     */
    protected $Smb3e329;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Smb3e329',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Smb3e329') ? [] : ['className' => Smb3e329Table::class];
        $this->Smb3e329 = $this->getTableLocator()->get('Smb3e329', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Smb3e329);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\Smb3e329Table::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
