<?php
declare(strict_types=1);

namespace App\Test\TestCase\Controller;

use App\Controller\StatusAtividadeController;
use Cake\TestSuite\IntegrationTestTrait;
use Cake\TestSuite\TestCase;

/**
 * App\Controller\StatusAtividadeController Test Case
 *
 * @uses \App\Controller\StatusAtividadeController
 */
class StatusAtividadeControllerTest extends TestCase
{
    use IntegrationTestTrait;

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
     * Test index method
     *
     * @return void
     * @uses \App\Controller\StatusAtividadeController::index()
     */
    public function testIndex(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test view method
     *
     * @return void
     * @uses \App\Controller\StatusAtividadeController::view()
     */
    public function testView(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test add method
     *
     * @return void
     * @uses \App\Controller\StatusAtividadeController::add()
     */
    public function testAdd(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test edit method
     *
     * @return void
     * @uses \App\Controller\StatusAtividadeController::edit()
     */
    public function testEdit(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test delete method
     *
     * @return void
     * @uses \App\Controller\StatusAtividadeController::delete()
     */
    public function testDelete(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
