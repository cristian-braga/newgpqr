<?php
declare(strict_types=1);

namespace App\Controller\Admin;

use App\Controller\AppController;
use App\Controller\Service\AtividadeService;

class RelatorioMultasController extends AppController
{
    protected $AtividadeService;

    public function initialize(): void
    {
        parent::initialize();
        $this->AtividadeService = new AtividadeService();
    }

    public function index()
    {
        $relatorioMultas = $this->RelatorioMultas->queryMultas();
            $this->set(compact('relatorioMultas'));
    }
}