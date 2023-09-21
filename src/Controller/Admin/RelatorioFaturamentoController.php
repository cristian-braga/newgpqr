<?php
declare(strict_types=1);

namespace App\Controller\Admin;

use App\Controller\AppController;

class RelatorioFaturamentoController extends AppController
{
    public function index()
    {
        $data_inicio = $this->request->getQuery('data_inicio');
        $data_fim = $this->request->getQuery('data_fim');

        $relatorio_faturamento = $this->RelatorioFaturamento->queryFaturamento($data_inicio, $data_fim);

        $total_docs = $total_folhas = 0;

        foreach ($relatorio_faturamento as $faturamento) {
            $total_docs += $faturamento['documentos'];
            $total_folhas += $faturamento['folhas'];
        }

        $subTotalDocPreparo = 0;
        $subTotalFolhasPreparo = 0;
        $subTotalDocImpressao = 0;
        $subTotalFolhasImpressao = 0;
        $subTotalDocCliente = 0;
        $subTotalFolhasCliente = 0;

        $this->set(compact(
            'relatorio_faturamento',
            'subTotalDocPreparo',
            'subTotalFolhasPreparo',
            'subTotalDocImpressao',
            'subTotalFolhasImpressao',
            'subTotalDocCliente',
            'subTotalFolhasCliente',
            'total_folhas',
            'total_docs',
            'data_inicio',
            'data_fim'
        ));
    }

    public function exportar()
    {
        $data_inicio = $this->request->getQuery('data_inicio');
        $data_fim = $this->request->getQuery('data_fim');

        $relatorio_faturamento = $this->RelatorioFaturamento->queryFaturamento($data_inicio, $data_fim);

        $total_docs = $total_folhas = 0;

        foreach ($relatorio_faturamento as $faturamento) {
            $total_docs += $faturamento['documentos'];
            $total_folhas += $faturamento['folhas'];
        }

        $subTotalDocPreparo = 0;
        $subTotalFolhasPreparo = 0;
        $subTotalDocImpressao = 0;
        $subTotalFolhasImpressao = 0;
        $subTotalDocCliente = 0;
        $subTotalFolhasCliente = 0;

        $html = '
        <meta charset="UTF-8">
        <body style="font-family: Arial; font-size: 14pt; text-align: center; vertical-align: middle;">
            <table border="1" style="width: 90%;">
                <thead>
                    <tr>
                        <th colspan="7" style="background-color: #27333F; color: #FFF; border-color: #808080;">
                            <img src="https://www.geo.prodemge.gov.br/assets/images/logo.png" height="30" width="138"><br><br>
                            COMPANHIA DE TECNOLOGIA DA INFORMAÇÃO DO ESTADO DE MINAS GERAIS<br>GIM - GERÊNCIA DE IMPRESSÃO DIGITAL<br><br>
                        </th>
                    </tr>
                    <tr>
                        <th colspan="7" style="background-color: #27333F; color: #FFF; border-color: #808080;">RELATÓRIO FATURAMENTO</th>
                    </tr>
                    <tr>
                        <th style="background-color: #27333F; color: #FFF; border-color: #808080;">Cliente</th>
                        <th style="background-color: #27333F; color: #FFF; border-color: #808080;">Impressão</th>
                        <th style="background-color: #27333F; color: #FFF; border-color: #808080;">Preparo</th>
                        <th style="background-color: #27333F; color: #FFF; border-color: #808080;">Sistema/Fase</th>
                        <th style="background-color: #27333F; color: #FFF; border-color: #808080;">Descrição</th>
                        <th style="background-color: #27333F; color: #FFF; border-color: #808080;">Documentos</th>
                        <th style="background-color: #27333F; color: #FFF; border-color: #808080;">Folhas</th>
                    </tr>
                </thead>
                <tbody>';
                    foreach ($relatorio_faturamento as $key => $servico) {
                        $html .= '
                        <tr>
                            <td style="background-color: #F8F8FF;">' . h($servico['cliente_servico']) . '</td>
                            <td>' . h($servico['impressao']) . '</td>
                            <td>' . h($servico['preparo']) . '</td>
                            <td>' . h($servico['servico']) . '</td>
                            <td>' . h($servico['descricao']) . '</td>
                            <td>' . number_format(floatval($servico['documentos']), 0, ',', '.') . '</td>
                            <td>' . number_format(floatval($servico['folhas']), 0, ',', '.') . '</td>
                        </tr>';
                        
                        if ($key == 0 || array_key_exists($key - 1, $relatorio_faturamento) && $relatorio_faturamento[$key]['cliente'] == $relatorio_faturamento[$key - 1]['cliente']) {
                            $subTotalDocCliente += $servico['documentos'];
                            $subTotalFolhasCliente += $servico['folhas']; 
                        } else {
                            $subTotalDocCliente += $servico['documentos'];
                            $subTotalFolhasCliente += $servico['folhas'];
                        }
    
                        if ($key == 0 || array_key_exists($key - 1, $relatorio_faturamento) && $relatorio_faturamento[$key]['preparo'] == $relatorio_faturamento[$key - 1]['preparo']) {
                            $subTotalDocPreparo += $servico['documentos'];
                            $subTotalFolhasPreparo += $servico['folhas'];
                        } else {
                            $subTotalDocPreparo += $servico['documentos'];
                            $subTotalFolhasPreparo += $servico['folhas'];
                        }
    
                        if ($key == 0 || array_key_exists($key - 1, $relatorio_faturamento) && $relatorio_faturamento[$key]['impressao'] == $relatorio_faturamento[$key - 1]['impressao']) {
                            $subTotalDocImpressao += $servico['documentos'];
                            $subTotalFolhasImpressao += $servico['folhas'];
                        } else {
                            $subTotalDocImpressao += $servico['documentos'];
                            $subTotalFolhasImpressao += $servico['folhas'];
                        }

                        if ($key == count($relatorio_faturamento) - 1 || array_key_exists($key + 1, $relatorio_faturamento) && $relatorio_faturamento[$key]['preparo'] != $relatorio_faturamento[$key + 1]['preparo'] || array_key_exists($key + 1, $relatorio_faturamento) && $relatorio_faturamento[$key]['cliente'] != $relatorio_faturamento[$key + 1]['cliente']) {
                            $html .= '
                            <tr>
                                <th colspan="2"></th>
                                <th colspan="3" style="text-align: left; background-color: #DEDCDC;"><b>Total - ' . h($servico['preparo']) . '</b></th>
                                <th style="background-color: #DEDCDC;">' . number_format($subTotalDocPreparo, 0, ',', '.') . '</th>
                                <th style="background-color: #DEDCDC;">' . number_format($subTotalFolhasPreparo, 0, ',', '.') . '</th>
                            </tr>';
                            $subTotalFolhasPreparo = $subTotalDocPreparo = 0;
                        }

                        if ($key == count($relatorio_faturamento) - 1 || array_key_exists($key + 1, $relatorio_faturamento) && $relatorio_faturamento[$key]['impressao'] != $relatorio_faturamento[$key + 1]['impressao'] || array_key_exists($key + 1, $relatorio_faturamento) && $relatorio_faturamento[$key]['cliente'] != $relatorio_faturamento[$key + 1]['cliente']) {
                            $html .= '
                            <tr>
                                <th></th>
                                <th colspan="4" style="text-align: left; background-color: #DEDCDC;">Total - ' . h($servico['impressao']) . ': </th>
                                <th style="background-color: #DEDCDC;">' . number_format($subTotalDocImpressao, 0, ',', '.') . '</th>
                                <th style="background-color: #DEDCDC;">' . number_format($subTotalFolhasImpressao, 0, ',', '.') . '</th>
                            </tr>';
                            $subTotalFolhasImpressao = $subTotalDocImpressao = 0;
                        }

                        if ($key == count($relatorio_faturamento) - 1 || array_key_exists($key + 1, $relatorio_faturamento) && $relatorio_faturamento[$key]['cliente'] != $relatorio_faturamento[$key + 1]['cliente']) {
                            $html .= '
                            <tr>
                            <th colspan="5" style="text-align: left; background-color: #DEDCDC;">Total - ' . h($servico['cliente']) . ': </th>
                            <th style="background-color: #DEDCDC;">' . number_format($subTotalDocCliente, 0, ',', '.') . '</th>
                            <th style="background-color: #DEDCDC;">' . number_format($subTotalFolhasCliente, 0, ',', '.') . '</th>
                            </tr>';
                            $subTotalDocCliente = $subTotalFolhasCliente = 0;
                        }
                    }
                    $html .= '
                    <tr>
                        <th style="background-color: #27333F; color: #FFF; border-color: #808080;">Total geral</th>
                        <th colspan="4" style="background-color: #27333F; color: #FFF; border-color: #808080;"></th>
                        <th style="background-color: #27333F; color: #FFF; border-color: #808080;">' . number_format($total_docs, 0, ',', '.') . '</th>
                        <th style="background-color: #27333F; color: #FFF; border-color: #808080;">' . number_format($total_folhas, 0, ',', '.') . '</th>
                    </tr>
                </tbody>
            </table>
        </body>';
        
        //Nome do arquivo
        $arquivo = 'Relatorio_Faturamento.xls';

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
