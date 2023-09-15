<?php
declare(strict_types=1);

namespace App\Controller\Admin;

use App\Controller\AppController;

class RelatorioMensalController extends AppController
{
    public function index()
    {
        $filtro_ano = $this->request->getQuery('filtro_ano');
        $data_inicio = $this->request->getQuery('data_inicio');
        $data_fim = $this->request->getQuery('data_fim');

        if (isset($filtro_ano) && $filtro_ano != '') {
            $ano = $filtro_ano;
        } else {
            $ano = date('Y');
        }

        // --------------------------------------- COMPARATIVO ----------------------------------------
        $relatorio_comparativo = $this->RelatorioMensal->queryComparativo();

        $ano_atual = $ano_passado = 0;

        foreach ($relatorio_comparativo as $total) {
            $ano_passado += $total['ano_passado'];
            $ano_atual += $total['ano_atual'];
        }

        // ---------------------------------------- PRODUÇÃO ------------------------------------------
        $relatorio_producao = $this->RelatorioMensal->queryProducao($ano);

        $documentos = $folhas = $paginas = 0;

        foreach ($relatorio_producao as $total) {
            $documentos += $total['quantidade_documentos'];
            $folhas += $total['quantidade_folhas'];
            $paginas += $total['quantidade_paginas'];
        }

        // -------------------------------- BOLETIM MENSAL DETALHADO ----------------------------------
        $boletim = $this->RelatorioMensal->queryBoletim($data_inicio, $data_fim)->toArray();

        $total_docs = $total_folhas = $total_pags = 0;

        foreach ($boletim as $registro) {
            $total_docs += $registro->documentos;
            $total_folhas += $registro->folhas;
            $total_pags += $registro->paginas;
        }

        $subTotalDocPreparo = 0;
        $subTotalFolhasPreparo = 0;
        $subTotalPagsPreparo = 0;
        $subTotalDocImpressao = 0;
        $subTotalFolhasImpressao = 0;
        $subTotalPagsImpressao = 0;
        $subTotalDocCliente = 0;
        $subTotalFolhasCliente = 0;
        $subTotalPagsCliente = 0;

        $this->set(compact(
            'relatorio_comparativo',
            'ano_atual',
            'ano_passado',
            'relatorio_producao',
            'documentos',
            'folhas',
            'paginas',
            'boletim',
            'subTotalDocPreparo',
            'subTotalFolhasPreparo',
            'subTotalPagsPreparo',
            'subTotalDocImpressao',
            'subTotalFolhasImpressao',
            'subTotalPagsImpressao',
            'subTotalDocCliente',
            'subTotalFolhasCliente',
            'subTotalPagsCliente',
            'total_docs',
            'total_folhas',
            'total_pags',
            'ano',
            'data_inicio',
            'data_fim'
        ));
    }

    public function exportar()
    {
        $ano = $this->request->getQuery('filtro_ano');
        $data_inicio = $this->request->getQuery('data_inicio');
        $data_fim = $this->request->getQuery('data_fim');

        // --------------------------------------- COMPARATIVO ----------------------------------------
        $relatorio_comparativo = $this->RelatorioMensal->queryComparativo();

        $ano_atual = $ano_passado = 0;

        foreach ($relatorio_comparativo as $total) {
            $ano_passado += $total['ano_passado'];
            $ano_atual += $total['ano_atual'];
        }

        // ---------------------------------------- PRODUÇÃO ------------------------------------------
        $relatorio_producao = $this->RelatorioMensal->queryProducao($ano);

        $documentos = $folhas = $paginas = 0;

        foreach ($relatorio_producao as $total) {
            $documentos += $total['quantidade_documentos'];
            $folhas += $total['quantidade_folhas'];
            $paginas += $total['quantidade_paginas'];
        }

        // -------------------------------- BOLETIM MENSAL DETALHADO ----------------------------------
        $boletim = $this->RelatorioMensal->queryBoletim($data_inicio, $data_fim)->toArray();

        $total_docs = $total_folhas = $total_pags = 0;

        foreach ($boletim as $registro) {
            $total_docs += $registro->documentos;
            $total_folhas += $registro->folhas;
            $total_pags += $registro->paginas;
        }

        $subTotalDocPreparo = 0;
        $subTotalFolhasPreparo = 0;
        $subTotalPagsPreparo = 0;
        $subTotalDocImpressao = 0;
        $subTotalFolhasImpressao = 0;
        $subTotalPagsImpressao = 0;
        $subTotalDocCliente = 0;
        $subTotalFolhasCliente = 0;
        $subTotalPagsCliente = 0;

        $html = '
        <meta charset="UTF-8">
        <body style="font-family: Arial; font-size: 14pt; text-align: center; vertical-align: middle;">
            <table border="1" style="width: 55%;">
                <thead>
                    <tr>
                        <th colspan="3" style="background-color: #27333F; color: #FFF; border-color: #808080;">
                            <img src="https://www.geo.prodemge.gov.br/assets/images/logo.png" height="30" width="138"><br><br>
                            COMPANHIA DE TECNOLOGIA DA INFORMAÇÃO DO ESTADO DE MINAS GERAIS<br>GIM - GERÊNCIA DE IMPRESSÃO DIGITAL<br><br>
                        </th>
                    </tr>
                    <tr>
                        <th colspan="3" style="background-color: #27333F; color: #FFF; border-color: #808080;">COMPARATIVO ' . (date('Y') - 1) . '/' . date('Y') . '</th>
                    </tr>
                    <tr>
                        <th style="background-color: #DEDCDC;">Referência</th>
                        <th style="background-color: #DEDCDC;">' . (date('Y') - 1) . '</th>
                        <th style="background-color: #DEDCDC;">' . date('Y') . '</th>
                    </tr>
                </thead>
                <tbody>';
                foreach ($relatorio_comparativo as $comparativo) {
                    $html .= '
                    <tr>
                        <td style="background-color: #F8F8FF;"><b>' . h($comparativo['mes']) . '</b></td>
                        <td>' . number_format(floatval($comparativo['ano_passado']), 0, ',', '.') . '</td>
                        <td>' . number_format(floatval($comparativo['ano_atual']), 0, ',', '.') . '</td>
                    </tr>';
                }
                $html .= '
                    <tr>
                        <th style="background-color: #DEDCDC;">Total</th>
                        <th style="background-color: #DEDCDC;">' . number_format($ano_passado, 0, ',', '.') . '</th>
                        <th style="background-color: #DEDCDC;">' . number_format($ano_atual, 0, ',', '.') . '</th>
                    </tr>
                </tbody>
            </table>
            <br><br>

            <table border="1" style="width: 55%;">
                <thead>
                    <tr>
                        <th colspan="4" style="background-color: #27333F; color: #FFF; border-color: #808080;">
                            <img src="https://www.geo.prodemge.gov.br/assets/images/logo.png" height="30" width="138"><br><br>
                            COMPANHIA DE TECNOLOGIA DA INFORMAÇÃO DO ESTADO DE MINAS GERAIS<br>GIM - GERÊNCIA DE IMPRESSÃO DIGITAL<br><br>
                        </th>
                    </tr>
                    <tr>
                        <th colspan="4" style="background-color: #27333F; color: #FFF; border-color: #808080;">PRODUÇÃO ' . $ano . '</th>
                    </tr>
                    <tr>
                        <th style="background-color: #DEDCDC;">Referência</th>
                        <th style="background-color: #DEDCDC;">Documentos</th>
                        <th style="background-color: #DEDCDC;">Folhas</th>
                        <th style="background-color: #DEDCDC;">Páginas</th>
                    </tr>
                </thead>
                <tbody>';
                foreach ($relatorio_producao as $producao) {
                    $html .= '
                    <tr>
                        <td style="background-color: #F8F8FF;"><b>' . h($producao['mes']) . '</b></td>
                        <td>' . number_format(floatval($producao['quantidade_documentos']), 0, ',', '.') . '</td>
                        <td>' . number_format(floatval($producao['quantidade_folhas']), 0, ',', '.') . '</td>
                        <td>' . number_format(floatval($producao['quantidade_paginas']), 0, ',', '.') . '</td>
                    </tr>';
                }
                $html .= '
                    <tr>
                        <th style="background-color: #DEDCDC;">Total</th>
                        <th style="background-color: #DEDCDC;">' . number_format($documentos, 0, ',', '.') . '</th>
                        <th style="background-color: #DEDCDC;">' . number_format($folhas, 0, ',', '.') . '</th>
                        <th style="background-color: #DEDCDC;">' . number_format($paginas, 0, ',', '.') . '</th>
                    </tr>
                </tbody>
            </table>
            <br><br>    

            <table border="1" style="width: 90%;">
                <thead>
                    <tr>
                        <th colspan="8" style="background-color: #27333F; color: #FFF; border-color: #808080;">
                            <img src="https://www.geo.prodemge.gov.br/assets/images/logo.png" height="30" width="138"><br><br>
                            COMPANHIA DE TECNOLOGIA DA INFORMAÇÃO DO ESTADO DE MINAS GERAIS<br>GIM - GERÊNCIA DE IMPRESSÃO DIGITAL<br><br>
                        </th>
                    </tr>
                    <tr>
                        <th colspan="8" style="background-color: #27333F; color: #FFF; border-color: #808080;">BOLETIM MENSAL DETALHADO</th>
                    </tr>
                    <tr>
                        <th style="background-color: #27333F; color: #FFF; border-color: #808080;">Cliente</th>
                        <th style="background-color: #27333F; color: #FFF; border-color: #808080;">Impressão</th>
                        <th style="background-color: #27333F; color: #FFF; border-color: #808080;">Preparo</th>
                        <th style="background-color: #27333F; color: #FFF; border-color: #808080;">Sistema/Fase</th>
                        <th style="background-color: #27333F; color: #FFF; border-color: #808080;">Descrição</th>
                        <th style="background-color: #27333F; color: #FFF; border-color: #808080;">Documentos</th>
                        <th style="background-color: #27333F; color: #FFF; border-color: #808080;">Folhas</th>
                        <th style="background-color: #27333F; color: #FFF; border-color: #808080;">Páginas</th>
                    </tr>
                </thead>
                <tbody>';
                foreach ($boletim as $key => $servico) {
                    $html .= '
                    <tr>
                        <td style="background-color: #F8F8FF;">' . h($servico->cliente_servico) . '</td>
                        <td>' . h($servico->impressao) . '</td>
                        <td>' . h($servico->preparo) . '</td>
                        <td>' . h($servico->servico) . '</td>
                        <td>' . h($servico->descricao) . '</td>
                        <td>' . number_format($servico->documentos, 0, ',', '.') . '</td>
                        <td>' . number_format($servico->folhas, 0, ',', '.') . '</td>
                        <td>' . number_format($servico->paginas, 0, ',', '.') . '</td>
                    </tr>';
                    if ($key == 0 || array_key_exists($key - 1, $boletim) && $boletim[$key]['cliente'] == $boletim[$key - 1]['cliente']) {
                        $subTotalDocCliente += $servico['documentos'];
                        $subTotalFolhasCliente += $servico['folhas'];
                        $subTotalPagsCliente += $servico['paginas'];
                    } else {
                        $subTotalDocCliente += $servico['documentos'];
                        $subTotalFolhasCliente += $servico['folhas'];
                        $subTotalPagsCliente += $servico['paginas'];
                    }

                    if ($key == 0 || array_key_exists($key - 1, $boletim) && $boletim[$key]['preparo'] == $boletim[$key - 1]['preparo']) {
                        $subTotalPagsPreparo += $servico['paginas'];
                        $subTotalFolhasPreparo += $servico['folhas'];
                        $subTotalDocPreparo += $servico['documentos'];
                    } else {
                        $subTotalPagsPreparo += $servico['paginas'];
                        $subTotalFolhasPreparo += $servico['folhas'];
                        $subTotalDocPreparo += $servico['documentos'];
                    }

                    if ($key == 0 || array_key_exists($key - 1, $boletim) && $boletim[$key]['impressao'] == $boletim[$key - 1]['impressao']) {
                        $subTotalPagsImpressao += $servico['paginas'];
                        $subTotalFolhasImpressao += $servico['folhas'];
                        $subTotalDocImpressao += $servico['documentos'];
                    } else {
                        $subTotalPagsImpressao += $servico['paginas'];
                        $subTotalFolhasImpressao += $servico['folhas'];
                        $subTotalDocImpressao += $servico['documentos'];
                    }

                    if ($key == count($boletim) - 1 || array_key_exists($key + 1, $boletim) && $boletim[$key]['preparo'] != $boletim[$key + 1]['preparo'] || array_key_exists($key + 1, $boletim) && $boletim[$key]['cliente'] != $boletim[$key + 1]['cliente']) {
                        $html .= '
                        <tr>
                            <th colspan="2"></th>
                            <th colspan="3" style="text-align: left; background-color: #DEDCDC;">Total - ' . h($servico->preparo) . ': </th>
                            <th style="background-color: #DEDCDC;">' . number_format($subTotalDocPreparo, 0, ',', '.') . '</th>
                            <th style="background-color: #DEDCDC;">' . number_format($subTotalFolhasPreparo, 0, ',', '.') . '</th>
                            <th style="background-color: #DEDCDC;">' . number_format($subTotalPagsPreparo, 0, ',', '.') . '</th>
                        </tr>';
                        $subTotalPagsPreparo = $subTotalFolhasPreparo = $subTotalDocPreparo = 0;
                    }

                    if ($key == count($boletim) - 1 || array_key_exists($key + 1, $boletim) && $boletim[$key]['impressao'] != $boletim[$key + 1]['impressao'] || $boletim[$key]['cliente'] != $boletim[$key + 1]['cliente']) {
                        $html .= '
                        <tr>
                            <th></th>
                            <th colspan="4" style="text-align: left; background-color: #DEDCDC;">Total - ' . h($servico->impressao) . ': </th>
                            <th style="background-color: #DEDCDC;">' . number_format($subTotalDocImpressao, 0, ',', '.') . '</th>
                            <th style="background-color: #DEDCDC;">' . number_format($subTotalFolhasImpressao, 0, ',', '.') . '</th>
                            <th style="background-color: #DEDCDC;">' . number_format($subTotalPagsImpressao, 0, ',', '.') . '</th>
                        </tr>';
                        $subTotalPagsImpressao = $subTotalFolhasImpressao = $subTotalDocImpressao = 0;
                    }

                    if ($key == count($boletim) - 1 || array_key_exists($key + 1, $boletim) && $boletim[$key]['cliente'] != $boletim[$key + 1]['cliente']) {
                        $html .= '
                        <tr>
                            <th colspan="5" style="text-align: left; background-color: #DEDCDC;">Total - ' . h($servico->cliente) . ': </th>
                            <th style="background-color: #DEDCDC;">' . number_format($subTotalDocCliente, 0, ',', '.') . '</th>
                            <th style="background-color: #DEDCDC;">' . number_format($subTotalFolhasCliente, 0, ',', '.') . '</th>
                            <th style="background-color: #DEDCDC;">' . number_format($subTotalPagsCliente, 0, ',', '.') . '</th>
                        </tr>';
                        $subTotalDocCliente = $subTotalFolhasCliente = $subTotalPagsCliente = 0;
                    }
                }
                $html .= '
                    <tr>
                        <th style="background-color: #27333F; color: #FFF; border-color: #808080;">Total geral</th>
                        <th colspan="4" style="background-color: #27333F; color: #FFF; border-color: #808080;"></th>
                        <th style="background-color: #27333F; color: #FFF; border-color: #808080;">' . number_format($total_docs, 0, ',', '.') . '</th>
                        <th style="background-color: #27333F; color: #FFF; border-color: #808080;">' . number_format($total_folhas, 0, ',', '.') . '</th>
                        <th style="background-color: #27333F; color: #FFF; border-color: #808080;">' . number_format($total_pags, 0, ',', '.') . '</th>
                    </tr>
                </tbody>
            </table>
        </body>';
        
        //Nome do arquivo
        $arquivo = 'Boletim_Mensal.xls';

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
