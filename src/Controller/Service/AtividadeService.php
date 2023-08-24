<?php
namespace App\Controller\Service;

use Cake\ORM\TableRegistry;

class AtividadeService
{
    protected $AtividadeTable;

    public function __construct()
    {
        $this->AtividadeTable = TableRegistry::getTableLocator()->get('Atividade');
    }

    public function servicos_opcoes()
    {
        $servicos = $this->AtividadeTable->Servico
            ->find('list', ['keyField' => 'id', 'valueField' => 'nome_servico'])
            ->where(['ativo' => 'Sim'])
            ->order(['nome_servico' => 'asc'])
            ->all();

        return $servicos;
    }

    public function calculaFolhasPaginas($servico_id, $documentos)
    {
        $servico = $this->AtividadeTable->Servico->get($servico_id);

        $tipo_env = $servico->envelopamento_servico;

        switch ($tipo_env) {
            case 'A4':
            case 'Sem Envelopamento':
            case 'Sem Envelopamento FV':
                $folhas = $documentos;
                $paginas = $folhas * 2;
                break;
            case 'CD':
            case 'Encadernação':
                $folhas = 0;
                $paginas = 0;
                break;
            case 'A5':
                if ($documentos % 2 == 1) {
                    $folhas = ($documentos + 1) / 2;
                } else {
                    $folhas = $documentos / 2;
                }
                $paginas = $folhas * 2;
                break;
            case 'Etiqueta':
                $folhas = ceil($documentos / 21);
                $paginas = $folhas;
                break;
            case 'Sem Envelopamento F':
                $folhas = $documentos;
                $paginas = $folhas;
        }

        $folhas_paginas['folhas'] = intval($folhas);
        $folhas_paginas['paginas'] = intval($paginas);

        return $folhas_paginas;
    }

    // Método necessário para buscar os dados e preencher os inputs no edit com os valores do banco
    public function buscaRegistro($id)
    {
        $atividade = $this->AtividadeTable->get($id, [
            'contain' => ['Servico'],
        ]);

        return $atividade;
    }

    public function edit($id, $dados)
    {
        $atividade = $this->buscaRegistro($id);

        $folhas_paginas = $this->calculaFolhasPaginas($dados['servico_id'], intval($dados['quantidade_documentos']));

        $dados['quantidade_folhas'] = $folhas_paginas['folhas'];
        $dados['quantidade_paginas'] = $folhas_paginas['paginas'];

        $this->AtividadeTable->patchEntity($atividade, $dados);

        $this->AtividadeTable->save($atividade);

        return true;
    }

    public function atualizaStatus($id, $status)
    {
        $atividade = $this->buscaRegistro($id);

        $novo_status['status_atividade_id'] = $status;

        $this->AtividadeTable->patchEntity($atividade, $novo_status);

        $this->AtividadeTable->save($atividade);

        return true;
    }
}