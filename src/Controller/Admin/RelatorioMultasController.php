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
            $ano_retrasado += $total['ano_retrasado'];
            $ano_passado += $total['ano_passado'];
            $ano_atual += $total['ano_atual'];
        }

        $this->set(compact('relatorio_multas', 'ano_atual', 'ano_passado', 'ano_retrasado'));
    }

    public function exportar()
    {
        $relatorio_multas = $this->RelatorioMultas->queryMultas();

        $ano_atual = $ano_passado = $ano_retrasado = 0;

        foreach ($relatorio_multas as $total) {
            $ano_retrasado += $total['ano_retrasado'];
            $ano_passado += $total['ano_passado'];
            $ano_atual += $total['ano_atual'];
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
                        <th colspan="4" style="background-color: #27333F; color: #FFF; border-color: #808080;">RELATÓRIO MULTAS</th>
                    </tr>
                    <tr>
                        <th style="background-color: #DEDCDC;">Referência</th>
                        <th style="background-color: #DEDCDC;">' . (date('Y') - 2) . '</th>
                        <th style="background-color: #DEDCDC;">' . (date('Y') - 1) . '</th>
                        <th style="background-color: #DEDCDC;">' . date('Y') . '</th>
                    </tr>
                </thead>
                <tbody>';
                foreach ($relatorio_multas as $multas) {
                    $html .= '
                    <tr>
                        <td style="background-color: #F8F8FF;"><b>' . h($multas['mes']) . '</b></td>
                        <td>' . number_format(floatval($multas['ano_retrasado']), 0, ',', '.') . '</td>
                        <td>' . number_format(floatval($multas['ano_passado']), 0, ',', '.') . '</td>
                        <td>' . number_format(floatval($multas['ano_atual']), 0, ',', '.') . '</td>
                    </tr>';
                }
                $html .= '
                    <tr>
                        <th style="background-color: #DEDCDC;">Total</th>
                        <th style="background-color: #DEDCDC;">' . number_format($ano_retrasado, 0, ',', '.') . '</th>
                        <th style="background-color: #DEDCDC;">' . number_format($ano_passado, 0, ',', '.') . '</th>
                        <th style="background-color: #DEDCDC;">' . number_format($ano_atual, 0, ',', '.') . '</th>
                    </tr>
                </tbody>
            </table>
        </body>';
        
        //Nome do arquivo
        $arquivo = 'Relatorio_Multas.xls';

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
