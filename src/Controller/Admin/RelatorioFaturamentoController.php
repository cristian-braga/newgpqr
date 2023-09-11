<?php
declare(strict_types=1);

namespace App\Controller\Admin;

use App\Controller\AppController;

class RelatorioFaturamentoController extends AppController
{
    public function index()
    {
        $relatorio_faturamento = $this->RelatorioFaturamento->queryFaturamento();

        $clientes = [];
        $total_docs = $total_folhas = 0;

        foreach ($relatorio_faturamento as $faturamento) {
            $cliente = $faturamento['cliente_servico'];
            unset($faturamento['cliente_servico']);

            if (array_key_exists($cliente, $clientes)) {
                $clientes[$cliente][] = $faturamento;
            } else {
                $clientes[$cliente] = [$faturamento];
            }

            $total_folhas += $faturamento['total_folhas'];
            $total_docs += $faturamento['total_docs'];
        }

        foreach ($clientes as $key => $cliente) {
            $totalDocPreparo = 0;
            $totalFolhasPreparo = 0;
            $totalDocImpressao = 0;
            $totalFolhasImpressao = 0;
            $totalDocCliente = 0;
            $totalFolhasCliente = 0;

            foreach ($cliente as $i => $servico) {
                if ($i == 0) {
                    $totalDocPreparo += $servico['total_docs'];
                    $totalFolhasPreparo += $servico['total_folhas'];
                    $totalDocImpressao += $servico['total_docs'];
                    $totalFolhasImpressao += $servico['total_folhas'];
                } else {
                    if ($cliente[$i]['tipo_preparo_servico'] == $cliente[$i - 1]['tipo_preparo_servico']) {
                        $totalDocPreparo += $servico['total_docs'];
                        $totalFolhasPreparo += $servico['total_folhas'];
                    }

                    if ($cliente[$i]['impressao_servico'] == $cliente[$i - 1]['impressao_servico']) {
                        $totalDocImpressao += $servico['total_docs'];
                        $totalFolhasImpressao += $servico['total_folhas'];
                    }
                }

                $totalDocCliente += $servico['total_docs'];
                $totalFolhasCliente += $servico['total_folhas'];
            }

            $totais = [
                'totalDocPreparo' => $totalDocPreparo,
                'totalFolhasPreparo' => $totalFolhasPreparo,
                'totalDocImpressao' => $totalDocImpressao,
                'totalFolhasImpressao' => $totalFolhasImpressao,
                'totalDocCliente' => $totalDocCliente,
                'totalFolhasCliente' => $totalFolhasCliente
            ];

            $clientes[$key]['totais'] = $totais;
        }

        $this->set(compact(
            'relatorio_faturamento',
            'clientes',
            'total_folhas',
            'total_docs'
        ));
    }

    public function exportar()
    {
        $relatorio_faturamento = $this->RelatorioFaturamento->queryFaturamento();

        $clientes = [];
        $total_docs = $total_folhas = 0;

        foreach ($relatorio_faturamento as $faturamento) {
            $cliente = $faturamento['cliente_servico'];
            unset($faturamento['cliente_servico']);

            if (array_key_exists($cliente, $clientes)) {
                $clientes[$cliente][] = $faturamento;
            } else {
                $clientes[$cliente] = [$faturamento];
            }

            $total_folhas += $faturamento['total_folhas'];
            $total_docs += $faturamento['total_docs'];
        }

        foreach ($clientes as $key => $cliente) {
            $totalDocPreparo = 0;
            $totalFolhasPreparo = 0;
            $totalDocImpressao = 0;
            $totalFolhasImpressao = 0;
            $totalDocCliente = 0;
            $totalFolhasCliente = 0;

            foreach ($cliente as $i => $servico) {
                if ($i == 0) {
                    $totalDocPreparo += $servico['total_docs'];
                    $totalFolhasPreparo += $servico['total_folhas'];
                    $totalDocImpressao += $servico['total_docs'];
                    $totalFolhasImpressao += $servico['total_folhas'];
                } else {
                    if ($cliente[$i]['tipo_preparo_servico'] == $cliente[$i - 1]['tipo_preparo_servico']) {
                        $totalDocPreparo += $servico['total_docs'];
                        $totalFolhasPreparo += $servico['total_folhas'];
                    }

                    if ($cliente[$i]['impressao_servico'] == $cliente[$i - 1]['impressao_servico']) {
                        $totalDocImpressao += $servico['total_docs'];
                        $totalFolhasImpressao += $servico['total_folhas'];
                    }
                }

                $totalDocCliente += $servico['total_docs'];
                $totalFolhasCliente += $servico['total_folhas'];
            }

            $totais = [
                'totalDocPreparo' => $totalDocPreparo,
                'totalFolhasPreparo' => $totalFolhasPreparo,
                'totalDocImpressao' => $totalDocImpressao,
                'totalFolhasImpressao' => $totalFolhasImpressao,
                'totalDocCliente' => $totalDocCliente,
                'totalFolhasCliente' => $totalFolhasCliente
            ];

            $clientes[$key]['totais'] = $totais;
        }

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
                        <th style="background-color: #27333F; color: #FFF; border-color: #808080;">Serviço</th>
                        <th style="background-color: #27333F; color: #FFF; border-color: #808080;">Descrição</th>
                        <th style="background-color: #27333F; color: #FFF; border-color: #808080;">Tipo</th>
                        <th style="background-color: #27333F; color: #FFF; border-color: #808080;">Preparo</th>
                        <th style="background-color: #27333F; color: #FFF; border-color: #808080;">Documentos</th>
                        <th style="background-color: #27333F; color: #FFF; border-color: #808080;">Folhas</th>
                    </tr>
                </thead>
                <tbody>';
                    foreach ($clientes as $cliente => $servicos) {
                        foreach ($servicos as $key => $servico) {
                            if ($key !== 'totais') {
                                $html .= '
                                <tr>
                                    <td>' . h($cliente) . '</td>
                                    <td>' . h($servico['nome_servico']) . '</td>
                                    <td>' . h($servico['descricao_servico']) . '</td>
                                    <td>' . h($servico['impressao_servico']) . '</td>
                                    <td>' . h($servico['tipo_preparo_servico']) . '</td>
                                    <td>' . number_format(floatval($servico['total_docs']), 0, ',', '.') . '</td>
                                    <td>' . number_format(floatval($servico['total_folhas']), 0, ',', '.') . '</td>
                                </tr>';
                            }
                        }
                        $html .= '
                        <tr>
                            <td colspan="3"></td>
                            <td colspan="2" style="text-align: left; background-color: #DEDCDC;"><b>Total - ' . h($servicos[0]['tipo_preparo_servico']) . '</b></td>
                            <td style="background-color: #DEDCDC;"><b>' . number_format($servicos['totais']['totalDocPreparo'], 0, ',', '.') . '</b></td>
                            <td style="background-color: #DEDCDC;"><b>' . number_format($servicos['totais']['totalFolhasPreparo'], 0, ',', '.') . '</b></td>
                        </tr>
                        <tr>
                            <td colspan="2"></td>
                            <td colspan="3" style="text-align: left; background-color: #DEDCDC;"><b>Total - ' . h($servicos[0]['impressao_servico']) . '</b></td>
                            <td style="background-color: #DEDCDC;"><b>' . number_format($servicos['totais']['totalDocImpressao'], 0, ',', '.') . '</b></td>
                            <td style="background-color: #DEDCDC;"><b>' . number_format($servicos['totais']['totalFolhasImpressao'], 0, ',', '.') . '</b></td>
                        </tr>
                        <tr>
                            <td colspan="5" style="text-align: left; background-color: #DEDCDC;"><b>Total - ' . h($cliente) . '</b></td>
                            <td style="background-color: #DEDCDC;"><b>' . number_format($servicos['totais']['totalDocCliente'], 0, ',', '.') . '</b></td>
                            <td style="background-color: #DEDCDC;"><b>' . number_format($servicos['totais']['totalFolhasCliente'], 0, ',', '.') . '</b></td>
                        </tr>';
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
