<?php
declare(strict_types=1);


namespace App\Controller\Admin;

use App\Controller\AppController;
use Cake\Datasource\ConnectionManager;


class FuncionariosGimController extends AppController
{
  
    public function index()
    {
        $funcionariosGim = $this->paginate($this->FuncionariosGim);

        $this->set(compact('funcionariosGim'));
    }

    /**
     * View method
     *
     * @param string|null $id Funcionarios Gim id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $funcionariosGim = $this->FuncionariosGim->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('funcionariosGim'));
    }


    public function add()
    {
        $funcionariosGim = $this->FuncionariosGim->newEmptyEntity();
        if ($this->request->is('post')) {
            $funcionariosGim = $this->FuncionariosGim->patchEntity($funcionariosGim, $this->request->getData());
            if ($this->FuncionariosGim->save($funcionariosGim)) {
                $this->Flash->success(__('Salvo com sucesso!.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Funcionário não pôde ser salvo, tente novamente.'));
        }
        $this->set(compact('funcionariosGim'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Funcionarios Gim id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $funcionariosGim = $this->FuncionariosGim->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $funcionariosGim = $this->FuncionariosGim->patchEntity($funcionariosGim, $this->request->getData());
            if ($this->FuncionariosGim->save($funcionariosGim)) {
                $this->Flash->success(__('Editado com sucesso!.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Funcionário não pôde ser editado, tente novamente.'));
        }
        $this->set(compact('funcionariosGim'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Funcionarios Gim id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $funcionariosGim = $this->FuncionariosGim->get($id);
        if ($this->FuncionariosGim->delete($funcionariosGim)) {
            $this->Flash->success(__('Deletado com sucesso!.'));
        } else {
            $this->Flash->error(__('Funcionário não pôde ser deletado, tente novamente.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function exportarExcel() {

        //nome do arquivo
        $file = 'funcionariosGim.xls';

        //html da tabela
        $html = '';
         $html .= "<meta charset='UTF-8'>";
         $html .= '<table border="1">';
         $html .= '<tr>';
         $html .= '<td style="color:#fff; text-align: center; border: 1px solid #808080; background-color:#27333F; font-weight:bold;" colspan="5">Funcionários GIM</tr>';
         $html .= '</tr>';

         $html .= '<tr>';
         $html .= '<td style="color:#fff; text-align: center; border: 1px solid #808080; background-color:#27333F; font-weight:bold;">Nome</td>';
         $html .= '<td style="color:#fff; text-align: center; border: 1px solid #808080; background-color:#27333F; font-weight:bold;">Matrícula</td>';
         $html .= '<td style="color:#fff; text-align: center; border: 1px solid #808080; background-color:#27333F; font-weight:bold;">Email</td>';
         $html .= '<td style="color:#fff; text-align: center; border: 1px solid #808080; background-color:#27333F; font-weight:bold;">Telefone</td>';
         $html .= '<td style="color:#fff; text-align: center; border: 1px solid #808080; background-color:#27333F; font-weight:bold;">Turno</td>';
         $html .= '</tr>';

         //query para selecionar os dados presentes na tabela de funcionarios
         $conn = ConnectionManager::get('default');
         $funcionariosGim = $conn->execute(
            "SELECT nome, matricula, email, tel, turno FROM funcionarios_gim;"
         )->fetchAll('assoc');

        //foreach para percorrer cada informaçao e trazer seu correspondente
         foreach ($funcionariosGim as $planilhaFuncionarios) {
            $html .= '<tr>';
            $html .= '<td style="text-align:center; background-color: #AFABAB;">' . $planilhaFuncionarios["nome"] . '</td>';
            $html .= '<td style="text-align: center;">' .$planilhaFuncionarios["matricula"].  '</td>';
            $html .= '<td style="text-align: center;">' .$planilhaFuncionarios["email"].  '</td>';
            $html .= '<td style="text-align: center;">' .$planilhaFuncionarios["tel"].  '</td>';
            $html .= '<td style="text-align: center;">' .$planilhaFuncionarios["turno"].  '</td>';

         }

         //configuraçoes para o download 
         // Configurações header para forçar o download
         header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
         header("Last-Modified: " . gmdate("D,d M YH:i:s") . " GMT");
         header("Cache-Control: no-cache, must-revalidate");
         header("Pragma: no-cache");
         header("Content-type: application/x-msexcel");
         header("Content-Disposition: attachment; filename=\"{$file}\"");
         header("Content-Description: PHP Generated Data");
         // Envia o conteúdo do arquivo
         echo $html;
         die();


       
    }
}
