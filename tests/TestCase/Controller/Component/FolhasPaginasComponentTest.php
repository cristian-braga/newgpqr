<?php
declare(strict_types=1);

namespace App\Test\TestCase\Controller\Component;

use App\Controller\Component\FolhasPaginasComponent;
use Cake\Controller\ComponentRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Controller\Component\FolhasPaginasComponent Test Case
 */
class FolhasPaginasComponentTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Controller\Component\FolhasPaginasComponent
     */
    protected $FolhasPaginas;

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $registry = new ComponentRegistry();
        $this->FolhasPaginas = new FolhasPaginasComponent($registry);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->FolhasPaginas);

        parent::tearDown();
    }
}
