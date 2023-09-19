<?php
declare(strict_types=1);

namespace App\Controller\Admin;

use App\Controller\AppController;

class MedidoresController extends AppController
{
    public function index()
    {
        $filtro_ano = $this->request->getQuery('filtro_ano');

        if (isset($filtro_ano) && $filtro_ano != '') {
            $ano = $filtro_ano;
        } else {
            $ano = date('Y');
        }

        $this->paginate = [
            'limit' => 15,
            'order' => ['data_cadastro' => 'desc']
        ];

        $query = $this->Medidores->find()
            ->where([
                'YEAR(data_cadastro) =' => $ano
            ]);

        $medidores = $this->paginate($query);

        $medidores_imp = $this->Medidores->queryMedidores($ano);

        $dados_medidores = [];
        $somaNuv1 = $somaNuv2 = 0;
        $partAnual1 = $partAnual2 = 0;
        $somaTotal = 0;

        foreach ($medidores_imp as $key => $medidor) {
            if (array_key_exists($key - 1, $medidores_imp)) {
                $mensal_nuv1 = $medidores_imp[$key]['total_nuv1'] - $medidores_imp[$key - 1]['total_nuv1'];
                $mensal_nuv2 = $medidores_imp[$key]['total_nuv2'] - $medidores_imp[$key - 1]['total_nuv2'];
                $mensal_total = $mensal_nuv1 + $mensal_nuv2;

                $participacao_nuv1 = ($mensal_nuv1 / $mensal_total) * 100;
                $participacao_nuv2 = ($mensal_nuv2 / $mensal_total) * 100;

                $dados = [
                    "ano" => $medidores_imp[$key]['ano'],
                    "mes" => $medidores_imp[$key]['mes'],
                    "mensal_nuv1" => $mensal_nuv1,
                    "participacao_nuv1" => $participacao_nuv1,
                    "mensal_nuv2" => $mensal_nuv2,
                    "participacao_nuv2" => $participacao_nuv2,
                    "mensal_total" => $mensal_total
                ];

                $dados_medidores[] = $dados;

                $somaNuv1 += $mensal_nuv1;
                $somaNuv2 += $mensal_nuv2;
                $somaTotal += $mensal_total;
            }
        }

        if ($somaTotal !== 0) {
            $partAnual1 = ($somaNuv1 / $somaTotal) * 100;
            $partAnual2 = ($somaNuv2 / $somaTotal) * 100;
        }

        $this->set(compact('medidores', 'dados_medidores', 'somaNuv1', 'partAnual1', 'somaNuv2', 'partAnual2', 'somaTotal', 'ano'));
    }

    public function add()
    {
        $medidores = $this->Medidores->newEmptyEntity();

        if ($this->request->is('post')) {
            $medidores = $this->Medidores->patchEntity($medidores, $this->request->getData());

            if ($this->Medidores->save($medidores)) {
                $this->Flash->success(__('Registro lançado com sucesso!'));

                return $this->redirect(['action' => 'index']);
            }

            $this->Flash->error(__('Falha ao lançar registro. Tente novamente.'));
        }

        $this->set(compact('medidores'));
    }

    public function edit($id = null)
    {
        $medidores = $this->Medidores->get($id);

        if ($this->request->is(['patch', 'post', 'put'])) {
            $medidores = $this->Medidores->patchEntity($medidores, $this->request->getData());

            if ($this->Medidores->save($medidores)) {
                $this->Flash->success(__('Registro editado com sucesso!'));

                return $this->redirect(['action' => 'index']);
            }

            $this->Flash->error(__('Falha ao editar registro. Tente novamente.'));
        }

        $this->set(compact('medidores'));
    }

    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $medidores = $this->Medidores->get($id);

        if ($this->Medidores->delete($medidores)) {
            $this->Flash->success(__('Registro excluído com sucesso!'));
        } else {
            $this->Flash->error(__('Falha ao excluir registro. Tente novamente.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function exportar()
    {
        $ano = $this->request->getQuery('filtro_ano');

        $medidores_imp = $this->Medidores->queryMedidores($ano);

        $dados_medidores = [];
        $somaNuv1 = $somaNuv2 = 0;
        $partAnual1 = $partAnual2 = 0;
        $somaTotal = 0;

        foreach ($medidores_imp as $key => $medidor) {
            if (array_key_exists($key - 1, $medidores_imp)) {
                $mensal_nuv1 = $medidores_imp[$key]['total_nuv1'] - $medidores_imp[$key - 1]['total_nuv1'];
                $mensal_nuv2 = $medidores_imp[$key]['total_nuv2'] - $medidores_imp[$key - 1]['total_nuv2'];
                $mensal_total = $mensal_nuv1 + $mensal_nuv2;

                $participacao_nuv1 = ($mensal_nuv1 / $mensal_total) * 100;
                $participacao_nuv2 = ($mensal_nuv2 / $mensal_total) * 100;

                $dados = [
                    "ano" => $medidores_imp[$key]['ano'],
                    "mes" => $medidores_imp[$key]['mes'],
                    "mensal_nuv1" => $mensal_nuv1,
                    "participacao_nuv1" => $participacao_nuv1,
                    "mensal_nuv2" => $mensal_nuv2,
                    "participacao_nuv2" => $participacao_nuv2,
                    "mensal_total" => $mensal_total
                ];

                $dados_medidores[] = $dados;

                $somaNuv1 += $mensal_nuv1;
                $somaNuv2 += $mensal_nuv2;
                $somaTotal += $mensal_total;
            }
        }

        if ($somaTotal !== 0) {
            $partAnual1 = ($somaNuv1 / $somaTotal) * 100;
            $partAnual2 = ($somaNuv2 / $somaTotal) * 100;
        }

        $html = '
        <meta charset="UTF-8">
        <body style="font-family: Arial; font-size: 14pt; text-align: center; vertical-align: middle;">
            <table border="1" style="width: 65%;">
                <thead>
                    <tr>
                        <th colspan="6" style="background-color: #27333F; color: #FFF; border-color: #808080;">
                            <img src="https://www.geo.prodemge.gov.br/assets/images/logo.png" height="30" width="138"><br><br>
                            COMPANHIA DE TECNOLOGIA DA INFORMAÇÃO DO ESTADO DE MINAS GERAIS<br>GIM - GERÊNCIA DE IMPRESSÃO DIGITAL<br><br>
                        </th>
                    </tr>
                    <tr>
                        <th colspan="6" style="background-color: #27333F; color: #FFF; border-color: #808080;">CONTROLE DE IMPRESSÕES ' . $ano . '</th>
                    </tr>
                    <tr>
                        <th colspan="6" style="background-color: #27333F; color: #FFF; border-color: #808080;">FRANQUIAS MENSAIS</th>
                    </tr>
                    <tr>
                        <th colspan="2" style="background-color: #F8F8FF;">Equipamento</th>
                        <td colspan="2">Nuvera157-1</td>
                        <td colspan="2">Nuvera157-2</td>
                    </tr>
                    <tr>
                        <th colspan="2" style="background-color: #F8F8FF;">N° de cópias</th>
                        <td colspan="4">834.000</td>
                    </tr>
                    <tr>
                        <th colspan="6" style="background-color: #27333F; color: #FFF; border-color: #808080;">IMPRESSÕES</th>
                    </tr>
                    <tr>
                        <th style="background-color: #DEDCDC;">Período</th>
                        <th style="background-color: #DEDCDC;">Nuvera-1</th>
                        <th style="background-color: #DEDCDC;">Participação</th>
                        <th style="background-color: #DEDCDC;">Nuvera-2</th>
                        <th style="background-color: #DEDCDC;">Participação</th>
                        <th style="background-color: #DEDCDC;">Total</th>
                    </tr>
                </thead>
                <tbody>';
                foreach ($dados_medidores as $key => $value) {
                    if ($dados_medidores[$key]['ano'] === $ano) {
                        $html .= '
                        <tr>
                            <td style="background-color: #F8F8FF;"><b>' . h($dados_medidores[$key]['mes']) . '</b></td>
                            <td>' . number_format($dados_medidores[$key]['mensal_nuv1'], 0, ',', '.') . '</td>
                            <td>' . number_format($dados_medidores[$key]['participacao_nuv1'], 1, ',', '.') . '%</td>
                            <td>' . number_format($dados_medidores[$key]['mensal_nuv2'], 0, ',', '.') . '</td>
                            <td>' . number_format($dados_medidores[$key]['participacao_nuv2'], 1, ',', '.') . '%</td>
                            <td>' . number_format($dados_medidores[$key]['mensal_total'], 0, ',', '.') . '</td>
                        </tr>';
                    }
                }
                $html .= '
                    <tr>
                        <th style="background-color: #DEDCDC;">Total</th>
                        <th style="background-color: #DEDCDC;">' . number_format($somaNuv1, 0, ',', '.') . '</th>
                        <th style="background-color: #DEDCDC;">' . number_format($partAnual1, 1, ',', '.') . '%</th>
                        <th style="background-color: #DEDCDC;">' . number_format($somaNuv2, 0, ',', '.') . '</th>
                        <th style="background-color: #DEDCDC;">' . number_format($partAnual2, 1, ',', '.') . '%</th>
                        <th style="background-color: #DEDCDC;">' . number_format($somaTotal, 0, ',', '.') . '</th>
                    </tr>
                </tbody>
            </table>
        </body>';
        
        //Nome do arquivo
        $arquivo = 'Medidores.xls';

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
