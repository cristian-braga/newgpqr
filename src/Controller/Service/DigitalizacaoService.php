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

    public function atualizaStatus($id, $status)
    {
        $digitalizacao = $this->buscaRegistro($id);

        if ($digitalizacao->digitalizado === 'Não') {
            $novo_status['digitalizado'] = 'Sim';
        } else {
            $novo_status['digitalizado'] = 'Não';
        }

        $novo_status['status_digitalizacao'] = $status;

        $this->DigitalizacaoTable->patchEntity($digitalizacao, $novo_status);

        $this->DigitalizacaoTable->save($digitalizacao);

        return true;
    }
}