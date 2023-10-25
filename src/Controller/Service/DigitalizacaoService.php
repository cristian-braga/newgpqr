<?php
namespace App\Controller\Service;

use Cake\ORM\TableRegistry;

class DigitalizacaoService
{
    protected $DigitalizacaoTable;

    public function __construct()
    {
        $this->DigitalizacaoTable = TableRegistry::getTableLocator()->get('Digitalizacao');
    }

    public function buscaRegistro($id)
    {
        $digitalizacao = $this->DigitalizacaoTable->get($id, [
            'contain' => ['Servico'],
        ]);

        return $digitalizacao;
    }

    public function edit($id, $dados)
    {
        $digitalizacao = $this->buscaRegistro($id);

        $this->DigitalizacaoTable->patchEntity($digitalizacao, $dados);

        $this->DigitalizacaoTable->save($digitalizacao);

        return true;
    }

    public function atualizaStatus($id, $status, $digitalizado = null)
    {
        $digitalizacao = $this->buscaRegistro($id);

        if (isset($digitalizado)) {
            $novo_status['digitalizado'] = $digitalizado;
        }

        $novo_status['status_digitalizacao'] = $status;

        $this->DigitalizacaoTable->patchEntity($digitalizacao, $novo_status);

        $this->DigitalizacaoTable->save($digitalizacao);

        return true;
    }
}