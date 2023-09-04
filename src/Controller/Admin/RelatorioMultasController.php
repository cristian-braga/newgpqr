<?php
declare(strict_types=1);

namespace App\Controller\Admin;

use App\Controller\AppController;

class RelatorioMultasController extends AppController
{
    public function index()
    {
        $relatorio_multas = $this->RelatorioMultas->queryMultas();

        $ano_atual = $ano_passado = $ano_retrasado = 0;

        foreach ($relatorio_multas as $total) {
            $ano_atual += $total['ano_retrasado'];
            $ano_passado += $total['ano_passado'];
            $ano_retrasado += $total['ano_atual'];
        }

        $this->set(compact('relatorio_multas', 'ano_atual', 'ano_passado', 'ano_retrasado'));
    }
}