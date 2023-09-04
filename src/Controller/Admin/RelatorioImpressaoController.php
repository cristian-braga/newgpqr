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

        $totalA4 = $totalA5 = $total = 0;

        foreach ($relatorio_impressao as $item) {
            $totalA4 += $item['total_A4'];
            $totalA5 += $item['total_A5'];
            $total += $item['total_mes'];
        }

        $this->set(compact('relatorio_impressao', 'totalA4', 'totalA5', 'total', 'ano'));
    }

    public function exportar()
    {
        $ano = $this->request->getQuery('filtro_ano');

        $relatorio_impressao = $this->RelatorioImpressao->queryImpressao($ano);

        $totalA4 = $totalA5 = $total = 0;

        foreach ($relatorio_impressao as $item) {
            $totalA4 += $item['total_A4'];
            $totalA5 += $item['total_A5'];
            $total += $item['total_mes'];
        }

        $html = '
        <meta charset="UTF-8">
        <body style="font-family: Arial; font-size: 14pt;">
            <table border="1" style="width: 55%; text-align: center;">
                <thead>
                    <tr>
                        <th style="background-color: #27333F; color: #FFF; border-color: #808080;" colspan="4">
                            <img src="https://www.geo.prodemge.gov.br/assets/images/logo.png" height="30" width="138"><br><br>
                            COMPANHIA DE TECNOLOGIA DA INFORMAÇÃO DO ESTADO DE MINAS GERAIS<br>GIM - GERÊNCIA DE IMPRESSÃO DIGITAL<br><br>
                        </th>
                    </tr>
                    <tr>
                        <th style="background-color: #27333F; color: #FFF; border-color: #808080;" colspan="4">RELATÓRIO impressao ' . $ano . '</th>
                    </tr>
                    <tr>
                        <th style="background-color: #DEDCDC;">Referência</th>
                        <th style="background-color: #DEDCDC;">A4</th>
                        <th style="background-color: #DEDCDC;">A5</th>
                        <th style="background-color: #DEDCDC;">Mensal</th>
                    </tr>
                </thead>
                <tbody>';
                foreach ($relatorio_impressao as $impressao) {
                    $html .= '
                    <tr style="text-align: center;">
                        <td style="background-color: #F8F8FF;"><b>' . h($impressao['mes']) . '</b></td>
                        <td>' . number_format(floatval($impressao['total_A4']), 0, ',', '.') . '</td>
                        <td>' . number_format(floatval($impressao['total_A5']), 0, ',', '.') . '</td>
                        <td>' . number_format(floatval($impressao['total_mes']), 0, ',', '.') . '</td>
                    </tr>';
                }
                $html .= '
                    <tr style="text-align: center; font-weight: bold;">
                        <td style="background-color: #DEDCDC;">Total</td>
                        <td style="background-color: #DEDCDC;">' . number_format($totalA4, 0, ',', '.') . '</td>
                        <td style="background-color: #DEDCDC;">' . number_format($totalA5, 0, ',', '.') . '</td>
                        <td style="background-color: #DEDCDC;">' . number_format($total, 0, ',', '.') . '</td>
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
