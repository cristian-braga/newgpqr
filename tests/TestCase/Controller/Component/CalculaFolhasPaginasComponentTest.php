<?php
declare(strict_types=1);

namespace App\Test\TestCase\Controller\Component;

use App\Controller\Component\CalculaFolhasPaginasComponent;
use Cake\Controller\ComponentRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Controller\Component\CalculaFolhasPaginasComponent Test Case
 */
class CalculaFolhasPaginasComponentTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Controller\Component\CalculaFolhasPaginasComponent
     */
    protected $CalculaFolhasPaginas;

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $registry = new ComponentRegistry();
        $this->CalculaFolhasPaginas = new CalculaFolhasPaginasComponent($registry);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->CalculaFolhasPaginas);

        parent::tearDown();
    }
}
