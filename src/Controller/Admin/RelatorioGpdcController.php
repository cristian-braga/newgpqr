<?php
declare(strict_types=1);

namespace App\Controller\Admin;

use App\Controller\AppController;

class RelatorioGpdcController extends AppController
{
    public function index()
    {
        $data_inicio = $this->request->getQuery('data_inicio');
        $data_fim = $this->request->getQuery('data_fim');
        $filtro_servico = $this->request->getQuery('filtro_servico');

        $dados = $this->RelatorioGpdc->queryGpdc($data_inicio, $data_fim, $filtro_servico);

        $grupos_servicos = [];
        $total_docs = $total_folhas = 0;

        foreach ($dados as $elemento) {
            $servico = $elemento->nome_servico;

            if (array_key_exists($servico, $grupos_servicos)) {
                $grupos_servicos[$servico][] = $elemento;
            } else {
                $grupos_servicos[$servico] = [$elemento];
            }

            $total_docs += $elemento['documentos'];
            $total_folhas += $elemento['folhas'];
        }

        foreach ($grupos_servicos as $key => $servico) {
            $totalDocs = $totalFolhas = 0;

            foreach ($servico as $item) {
                $totalDocs += $item['documentos'];
                $totalFolhas += $item['folhas'];
            }

            $grupos_servicos[$key]['totalDocs'] = $totalDocs;
            $grupos_servicos[$key]['totalFolhas'] = $totalFolhas;
        }

        $servicos = $this->RelatorioGpdc->servicos()->toArray();

        $this->set(compact('grupos_servicos', 'total_docs', 'total_folhas', 'servicos', 'filtro_servico', 'data_inicio', 'data_fim'));
    }

    public function exportar()
    {
        $data_inicio = $this->request->getQuery('data_inicio');
        $data_fim = $this->request->getQuery('data_fim');
        $filtro_servico = $this->request->getQuery('filtro_servico');

        $dados = $this->RelatorioGpdc->queryGpdc($data_inicio, $data_fim, $filtro_servico);

        $grupos_servicos = [];
        $total_docs = $total_folhas = 0;

        foreach ($dados as $elemento) {
            $servico = $elemento->nome_servico;

            if (array_key_exists($servico, $grupos_servicos)) {
                $grupos_servicos[$servico][] = $elemento;
            } else {
                $grupos_servicos[$servico] = [$elemento];
            }

            $total_docs += $elemento['documentos'];
            $total_folhas += $elemento['folhas'];
        }

        foreach ($grupos_servicos as $key => $servico) {
            $totalDocs = $totalFolhas = 0;

            foreach ($servico as $item) {
                $totalDocs += $item['documentos'];
                $totalFolhas += $item['folhas'];
            }

            $grupos_servicos[$key]['totalDocs'] = $totalDocs;
            $grupos_servicos[$key]['totalFolhas'] = $totalFolhas;
        }

        $html = '
        <meta charset="UTF-8">
        <body style="font-family: Arial; font-size: 14pt; text-align: center; vertical-align: middle;">
            <table border="1" style="width: 80%;">
                <thead>
                    <tr>
                        <th colspan="6" style="background-color: #27333F; color: #FFF; border-color: #808080;">
                            <img src="https://www.geo.prodemge.gov.br/assets/images/logo.png" height="30" width="138"><br><br>
                            COMPANHIA DE TECNOLOGIA DA INFORMAÇÃO DO ESTADO DE MINAS GERAIS<br>GIM - GERÊNCIA DE IMPRESSÃO DIGITAL<br><br>
                        </th>
                    </tr>
                    <tr>
                        <th colspan="6" style="background-color: #27333F; color: #FFF; border-color: #808080;">RELATÓRIO GPDC</th>
                    </tr>
                    <tr>
                        <th style="background-color: #27333F; color: #FFF; border-color: #808080;">Sistema/Fase</th>
                        <th style="background-color: #27333F; color: #FFF; border-color: #808080;">Cliente</th>
                        <th style="background-color: #27333F; color: #FFF; border-color: #808080;">Descrição</th>
                        <th style="background-color: #27333F; color: #FFF; border-color: #808080;">Código</th>
                        <th style="background-color: #27333F; color: #FFF; border-color: #808080;">Documentos</th>
                        <th style="background-color: #27333F; color: #FFF; border-color: #808080;">Folhas</th>
                    </tr>
                </thead>
                <tbody>';
                foreach ($grupos_servicos as $nome_servico => $expedicao) {
                    foreach ($expedicao as $key => $servico) {
                        if ($key !== 'totalDocs' && $key !== 'totalFolhas') {
                            $html .= '
                            <tr>
                                <td>' . h($servico->nome_servico) . '</td>
                                <td>' . h($servico->cliente) . '</td>
                                <td>' . h($servico->descricao) . '</td>
                                <td>' . h($servico->codigo) . '</td>
                                <td>' . number_format($servico->documentos, 0, ',', '.') . '</td>
                                <td>' . number_format($servico->folhas, 0, ',', '.') . '</td>
                            </tr>';
                        }
                    }

                    $html .= '
                    <tr>
                        <td colspan="4" style="background-color: #DEDCDC;"><b>' . h($nome_servico) . ' - Totais:</b></td>
                        <td style="background-color: #DEDCDC;"><b>' . number_format($expedicao['totalDocs'], 0, ',', '.') . '</b></td>
                        <td style="background-color: #DEDCDC;"><b>' . number_format($expedicao['totalFolhas'], 0, ',', '.') . '</b></td>
                    </tr>';
                }
                    $html .= '
                    <tr>
                        <th style="background-color: #27333F; color: #FFF; border-color: #808080;">Total geral</th>
                        <th colspan="3" style="background-color: #27333F; border-color: #808080;"></th>
                        <th style="background-color: #27333F; color: #FFF; border-color: #808080;">' . number_format($total_docs, 0, ',', '.') . '</th>
                        <th style="background-color: #27333F; color: #FFF; border-color: #808080;">' . number_format($total_folhas, 0, ',', '.') . '</th>
                    </tr>
                </tbody>
            </table>
        </body>';
        
        //Nome do arquivo
        $arquivo = 'Relatorio_GPDC.xls';

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
