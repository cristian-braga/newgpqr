<?php
declare(strict_types=1);

namespace App\Test\TestCase\Controller\Component;

use App\Controller\Component\EditAtividadeComponent;
use Cake\Controller\ComponentRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Controller\Component\EditAtividadeComponent Test Case
 */
class EditAtividadeComponentTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Controller\Component\EditAtividadeComponent
     */
    protected $EditAtividade;

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $registry = new ComponentRegistry();
        $this->EditAtividade = new EditAtividadeComponent($registry);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->EditAtividade);

        parent::tearDown();
    }
}
