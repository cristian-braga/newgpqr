<?php
declare(strict_types=1);

namespace App\Controller\Admin;

use App\Controller\AppController;

class RelatorioImpressaoController extends AppController
{
    public function index()
    {
        $filtro_ano = $this->request->getQuery('filtro_ano');

        if (isset($filtro_ano) && $filtro_ano != '') {
            $ano = $filtro_ano;
        } else {
            $ano = date('Y');
        }

        $relatorio_impressao = $this->RelatorioImpressao->queryImpressao($ano);

        $total = 0;

        foreach ($relatorio_impressao as $impressao) {
            $total += $impressao['total_mes'];
        }

        $this->set(compact('relatorio_impressao', 'total', 'ano'));
    }

    public function exportar()
    {
        $ano = $this->request->getQuery('filtro_ano');

        $relatorio_impressao = $this->RelatorioImpressao->queryImpressao($ano);

        $total = 0;

        foreach ($relatorio_impressao as $impressao) {
            $total += $impressao['total_mes'];
        }

        $html = '
        <meta charset="UTF-8">
        <body style="font-family: Arial; font-size: 14pt; text-align: center; vertical-align: middle;">
            <table border="1" style="width: 50%;">
                <thead>
                    <tr>
                        <th colspan="2" style="background-color: #27333F; color: #FFF; border-color: #808080;">
                            <img src="https://www.geo.prodemge.gov.br/assets/images/logo.png" height="30" width="138"><br><br>
                            COMPANHIA DE TECNOLOGIA DA INFORMAÇÃO DO ESTADO DE MINAS GERAIS<br>GIM - GERÊNCIA DE IMPRESSÃO DIGITAL<br><br>
                        </th>
                    </tr>
                    <tr>
                        <th colspan="2" style="background-color: #27333F; color: #FFF; border-color: #808080;">RELATÓRIO IMPRESSÃO ' . $ano . '</th>
                    </tr>
                    <tr>
                        <th style="background-color: #DEDCDC;">Referência</th>
                        <th style="background-color: #DEDCDC;">Mensal</th>
                    </tr>
                </thead>
                <tbody>';
                foreach ($relatorio_impressao as $impressao) {
                    $html .= '
                    <tr>
                        <td style="background-color: #F8F8FF;"><b>' . h($impressao['mes']) . '</b></td>
                        <td>' . number_format(floatval($impressao['total_mes']), 0, ',', '.') . '</td>
                    </tr>';
                }
                $html .= '
                    <tr>
                        <th style="background-color: #DEDCDC;">Total</th>
                        <th style="background-color: #DEDCDC;">' . number_format($total, 0, ',', '.') . '</th>
                    </tr>
                </tbody>
            </table>
        </body>';
        
        //Nome do arquivo
        $arquivo = 'Relatorio_Impressao.xls';

        // Configurações header para forçar o download
        header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
        header("Last-Modified: " . gmdate("D,d M YH:i:s") . " GMT");
        header("Cache-Control: no-cache, must-revalidate");
        header("Pragma: no-cache");
        header("Content-type: application/x-msexcel");
        header("Content-Disposition: attachment; filename=\"{$arquivo}\"");
        header("Content-Description: PHP Generated Data");
        echo $html;
        exit;
    }
}
