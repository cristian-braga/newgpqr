<?php
declare(strict_types=1);

namespace App\Controller\Admin;
use App\Controller\AppController;
use App\Controller\Service\AtividadeService;

class Smb3e316Controller extends AppController
{
    public function index()
    {
        $smb3e316 = $this->paginate($this->Smb3e316);

        $this->set(compact('smb3e316'));
    }

    public function add()
    {
        $smb3e316 = $this->Smb3e316->newEmptyEntity();
        if ($this->request->is('post')) {
            $data = $this->request->getData();
            $data['funcionario'] = 'Itallo';
            
            if ($data['cod_cidade'] == '2175'){
                $data['unidade'] = 'CTPM NS Vitórias-BH/CTPM/DEEAS';
            }
            elseif($data['cod_cidade'] == '2197'){
                $data['unidade'] = 'CTPM-Passos/12 BPM/ 18 RPM';
            }
            elseif($data['cod_cidade'] == '6865'){
                $data['unidade'] = 'CTPM-Vespasiano/CTPM Arg Madeira/DEEAS';
            }
            elseif($data['cod_cidade'] == '2201'){
                $data['unidade'] = 'CTPM-Patos de Minas/EM10RPM/ 10 RPM';
            }
            elseif($data['cod_cidade'] == '9856'){
                $data['unidade'] = 'CTPM-Sete Lagoas/EM19RPM/ 19 RPM';
            }
            elseif($data['cod_cidade'] == '2183'){
                $data['unidade'] ='CTPM-Uberaba/EM5RPM/5 RPM';
            }
            elseif($data['cod_cidade'] == '2177'){
                $data['unidade'] ='CTPM Minas Caixa-BH';
            }
            elseif($data['cod_cidade'] == '2195'){
                $data['unidade'] ='CTPM-Manhuaçu/11 BPM/12 RPM';
            }
            elseif($data['cod_cidade'] == '2189'){
                $data['unidade'] ='CTPM-Lavras/EM6RPM/6 RPM';
            }
            elseif($data['cod_cidade'] == '2179'){
                $data['unidade'] ='CTPM-Juiz de Fora/EM4RPM/4 RPM';
            }
            elseif($data['cod_cidade'] == '9666'){
                $data['unidade'] ='CTPM-Pouso Alegre/EM17RPM/17 RPM';
            }
            elseif($data['cod_cidade'] == '9855'){
                $data['unidade'] ='CTPM-São João Del Rei/38 BPM/ 13 RPM';
            }
            elseif($data['cod_cidade'] == '4243'){
                $data['unidade'] ='CTPM-Teófilo Otoni/EM15RPM/ 15 RPM';
            }
            elseif($data['cod_cidade'] == '9990'){
                $data['unidade'] ='CTPM-Ubá/21 BPM/4 RPM';
            }
            elseif($data['cod_cidade'] == '2174'){
                $data['unidade'] ='CTPM Gameleira-BH/CTPM/DEEAS';
            }
            elseif($data['cod_cidade'] == '2193'){
                $data['unidade'] ='CTPM Montes Claros/EM11RPM/11 RPM';
            }
            elseif($data['cod_cidade'] == '2187'){
                $data['unidade'] ='CTPM Bom Despacho/7 BPM/7 RPM';
            }
            elseif($data['cod_cidade'] == '3561'){
                $data['unidade'] ='J M Vasconcelos-Contagem/CTPM/DEEAS';
            }
            elseif($data['cod_cidade'] == '9665'){
                $data['unidade'] ='Professores/CTPM-Uberlândia/EM9RPM/9 RPM';
            }
            elseif($data['cod_cidade'] == '2185'){
                $data['unidade'] ='CTPM-Gov. Valadares/EM8RPM/8 RPM';
            }
            elseif($data['cod_cidade'] == '2199'){
                $data['unidade'] ='CTPM-Ipatinga/EM12RPM/12 RPM';
            }
            elseif($data['cod_cidade'] == '5486'){
                $data['unidade'] ='CTPM Betim/CTPM/DEEAS';
            }
            elseif($data['cod_cidade'] == '2191'){
                $data['unidade'] ='CTPM-Barbacena/EM13RPM/13 RPM';
            }
            elseif($data['cod_cidade'] == '9833'){
                $data['unidade'] ='CTPM Avel Camargos-Contagem/CTPM/DEEAS';
            }
            elseif($data['cod_cidade'] == '9991'){
                $data['unidade'] ='CTPM-Itabira/26 BPM/12 RPM';
            }
            elseif($data['cod_cidade'] == '9780'){
                $data['unidade'] ='CTPM-Divinópolis/EM7RPM/7 RPM ';
            }
            elseif($data['cod_cidade'] == '2181'){
                $data['unidade'] ='CTPM-Diamantina/14 RPM';
            }
            elseif($data['cod_cidade'] == '9854'){
                $data['unidade'] ='CTPM-Curvelo/EM14RPM/14 RPM';
            }
            elseif($data['cod_cidade'] == '9964'){
                $data['unidade'] ='CTPM-Araguari/53 BPM/9 RPM ';
            }
            elseif($data['cod_cidade'] == '2157'){
                $data['unidade'] ='CTPM/DEEAS';
            }
            else{

            }
            
            $data['total'] = $data['copias'] * $data['paginas'];

            $smb3e316 = $this->Smb3e316->patchEntity($smb3e316, $data);
            if ($this->Smb3e316->save($smb3e316)) {
                $this->Flash->success(__('Salvo com sucesso.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('O serviço não pode ser salvo. Tente novamente.'));
        }
        $this->set(compact('smb3e316'));
    }

    public function edit($id = null)
    {
        $smb3e316 = $this->Smb3e316->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $smb3e316 = $this->Smb3e316->patchEntity($smb3e316, $this->request->getData());
            if ($this->Smb3e316->save($smb3e316)) {
                $this->Flash->success(__('Serviço editado com sucesso.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('O serviço não pode ser editado. Tente novamente.'));
        }
        $this->set(compact('smb3e316'));
    }

    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'get','delete']);
        $smb3e316 = $this->Smb3e316->get($id);
        if ($this->Smb3e316->delete($smb3e316)) {
            $this->Flash->success(__('Serviço excluído com sucesso.'));
        } else {
            $this->Flash->error(__('O serviço não pode ser excluído. Tente novamente.'));
        }

        return $this->redirect(['action' => 'index']);
    }
    
    public function pdf($id = null)
    {
        $smb3e316 = $this->Smb3e316->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('smb3e316'));
    }
}