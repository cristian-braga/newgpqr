<?php
declare(strict_types=1);

namespace App\Controller\Admin;

use App\Controller\AppController;

class RelatorioEnvelopamentoController extends AppController
{
    public function index()
    {
        $filtro_ano = $this->request->getQuery('filtro_ano');

        if (isset($filtro_ano) && $filtro_ano != '') {
            $ano = $filtro_ano;
        } else {
            $ano = date('Y');
        }

        $relatorio_envelopamento = $this->RelatorioEnvelopamento->queryEnvelopamento($ano);

        $totalA4 = $totalA5 = $total = 0;

        foreach ($relatorio_envelopamento as $item) {
            $totalA4 += $item['total_A4'];
            $totalA5 += $item['total_A5'];
            $total += $item['total_mes'];
        }

        $this->set(compact('relatorio_envelopamento', 'totalA4', 'totalA5', 'total', 'ano'));
    }

    public function exportar()
    {
        $ano = $this->request->getQuery('filtro_ano');

        $relatorio_envelopamento = $this->RelatorioEnvelopamento->queryEnvelopamento($ano);

        $totalA4 = $totalA5 = $total = 0;

        foreach ($relatorio_envelopamento as $item) {
            $totalA4 += $item['total_A4'];
            $totalA5 += $item['total_A5'];
            $total += $item['total_mes'];
        }

        $html = '
        <meta charset="UTF-8">
        <body style="font-family: Arial; font-size: 14pt; text-align: center; vertical-align: middle;">
            <table border="1" style="width: 55%;">
                <thead>
                    <tr>
                        <th colspan="4" style="background-color: #27333F; color: #FFF; border-color: #808080;">
                            <img src="https://www.geo.prodemge.gov.br/assets/images/logo.png" height="30" width="138"><br><br>
                            COMPANHIA DE TECNOLOGIA DA INFORMAÇÃO DO ESTADO DE MINAS GERAIS<br>GIM - GERÊNCIA DE IMPRESSÃO DIGITAL<br><br>
                        </th>
                    </tr>
                    <tr>
                        <th colspan="4" style="background-color: #27333F; color: #FFF; border-color: #808080;">RELATÓRIO ENVELOPAMENTO ' . $ano . '</th>
                    </tr>
                    <tr>
                        <th style="background-color: #DEDCDC;">Referência</th>
                        <th style="background-color: #DEDCDC;">A4</th>
                        <th style="background-color: #DEDCDC;">A5</th>
                        <th style="background-color: #DEDCDC;">Mensal</th>
                    </tr>
                </thead>
                <tbody>';
                foreach ($relatorio_envelopamento as $envelopamento) {
                    $html .= '
                    <tr>
                        <td style="background-color: #F8F8FF;"><b>' . h($envelopamento['mes']) . '</b></td>
                        <td>' . number_format(floatval($envelopamento['total_A4']), 0, ',', '.') . '</td>
                        <td>' . number_format(floatval($envelopamento['total_A5']), 0, ',', '.') . '</td>
                        <td>' . number_format(floatval($envelopamento['total_mes']), 0, ',', '.') . '</td>
                    </tr>';
                }
                $html .= '
                    <tr>
                        <th style="background-color: #DEDCDC;">Total</th>
                        <th style="background-color: #DEDCDC;">' . number_format($totalA4, 0, ',', '.') . '</th>
                        <th style="background-color: #DEDCDC;">' . number_format($totalA5, 0, ',', '.') . '</th>
                        <th style="background-color: #DEDCDC;">' . number_format($total, 0, ',', '.') . '</th>
                    </tr>
                </tbody>
            </table>
        </body>';
        
        //Nome do arquivo
        $arquivo = 'Relatorio_Envelopamento.xls';

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
