<div class="container">
    <h2 class="text-center text-gpqr mb-4">Menu de Ajuda: Tutoriais, Passo a Passo e Utilitários</h2>

    <h4>Diversos:</h4>
    <ul class="list-unstyled d-flex align-items-center flex-wrap text-center mt-3 mb-4 ajuda-gpqr">
        <li>
            <?= $this->Html->link(
                '<i class="fas fa-phone-alt m-2"></i>Ramais da GIM',
                '/webroot/files/Ramais_GIM.pdf',
                [
                    'target' => '_blank',
                    'escape' => false
                ]
            ); ?>
        </li>
        <li>
            <?= $this->Html->link(
                '<i class="fas fa-phone-alt m-2"></i>Contatos externos',
                '/webroot/files/Contatos_Externos.pdf',
                [
                    'target' => '_blank',
                    'escape' => false
                ]
            ); ?>
        </li>
        <li>
            <?= $this->Html->link(
                '<i class="fas fa-phone-alt m-2"></i>Telefones Fornecedores',
                '/webroot/files/Telefones_Fornecedores.pdf',
                [
                    'target' => '_blank',
                    'escape' => false
                ]
            ); ?>
        </li>
        <li>
            <?= $this->Html->link(
                '<i class="fas fa-comments m-2"></i>Chat da Prodemge',
                'https://chat.prodemge.gov.br/home',
                [
                    'target' => '_blank',
                    'escape' => false
                ]
            ); ?>
        </li>
        <li>
            <?= $this->Html->link(
                '<i class="fas fa-laptop m-2"></i>Relação de IPs da GIM',
                '/webroot/files/IPs_da_GIM.pdf',
                [
                    'target' => '_blank',
                    'escape' => false
                ]
            ); ?>
        </li>
        <li>
            <?= $this->Html->link(
                '<i class="fas fa-pencil-alt m-2"></i>Tutorial - Assinatura digital Adobe',
                '/webroot/files/Tutorial-Assinatura_digital_Adobe.pdf',
                [
                    'target' => '_blank',
                    'escape' => false
                ]
            ); ?>
        </li>
    </ul>
    <hr>

    <h4>Desenvolvimento:</h4>
    <ul class="list-unstyled d-flex align-items-center flex-wrap text-center mt-3 mb-4 ajuda-gpqr">
        <li>
            <?= $this->Html->link(
                '<i class="fas fa-database m-2"></i>Tabela de acentuação JSL',
                '/webroot/files/Tabela_de_acentuação_TSOB.pdf',
                [
                    'target' => '_blank',
                    'escape' => false
                ]
            ); ?>
        </li>
        <li>
            <?= $this->Html->link(
                '<i class="fas fa-file-pdf m-2"></i>Enviar planilhas mensais para o Faturamento',
                '/webroot/files/Enviar_planilhas_mensais_para_o_faturamento.pdf',
                [
                    'target' => '_blank',
                    'escape' => false
                ]
            ); ?>
        </li>
        <li>
            <?= $this->Html->link(
                '<i class="fas fa-database m-2"></i>Formulários FSL - Main Frame',
                '/webroot/files/Formulários-FSL.pdf',
                [
                    'target' => '_blank',
                    'escape' => false
                ]
            ); ?>
        </li>
        <li>
            <?= $this->Html->link(
                '<i class="fas fa-database m-2"></i>Dados Variáveis JSL - Main Frame',
                '/webroot/files/Dados_Variáveis-JSL.pdf',
                [
                    'target' => '_blank',
                    'escape' => false
                ]
            ); ?>
        </li>
        <li>
            <?= $this->Html->link(
                '<i class="fas fa-code m-2"></i>Comandos diversos - TSOB',
                '/webroot/files/Diversos.pdf',
                [
                    'target' => '_blank',
                    'escape' => false
                ]
            ); ?>
        </li>
        <li>
            <?= $this->Html->link(
                '<i class="fas fa-file-pdf m-2"></i>Manual para alteração de Formulários - TSOB',
                '/webroot/files/Diversos.pdf',
                [
                    'target' => '_blank',
                    'escape' => false
                ]
            ); ?>
        </li>
        <li>
            <?= $this->Html->link(
                '<i class="fas fa-file-pdf m-2"></i>Manual para alteração de Remessa - TSOB',
                '/webroot/files/Remessa.pdf',
                [
                    'target' => '_blank',
                    'escape' => false
                ]
            ); ?>
        </li>
    </ul>
    <hr>

    <h4>Impressão:</h4>
    <ul class="list-unstyled d-flex align-items-center flex-wrap text-center mt-3 mb-4 ajuda-gpqr">
        <li>
            <?= $this->Html->link(
                '<i class="fas fa-print m-2"></i>Como importar quantitativo de multas do TSOB para o Sistema Controle',
                '/webroot/files/Como_importar_para_o_sistema_controle.pdf',
                [
                    'target' => '_blank',
                    'escape' => false
                ]
            ); ?>
        </li>
        <li>
            <?= $this->Html->link(
                '<i class="fas fa-print m-2"></i>Como imprimir DAE (Cartas/Boleto) do IPSEMG',
                '/webroot/files/Cartas_DAE_Ipsemg_KYOTO.pdf',
                [
                    'target' => '_blank',
                    'escape' => false
                ]
            ); ?>
        </li>
        <li>
            <?= $this->Html->link(
                '<i class="fas fa-upload m-2"></i>Ocorrências do SDM',
                '/webroot/files/Ocorrências_do_SDM.pdf',
                [
                    'target' => '_blank',
                    'escape' => false
                ]
            ); ?>
        </li>
        <li>
            <?= $this->Html->link(
                '<i class="fas fa-upload m-2"></i>Solicitações do SDM',
                '/webroot/files/Solicitações_do_SDM.pdf',
                [
                    'target' => '_blank',
                    'escape' => false
                ]
            ); ?>
        </li>
        <li>
            <?= $this->Html->link(
                '<i class="fas fa-print m-2"></i>Como imprimir multas do TSOB',
                '/webroot/files/Como_imprimir_multas_do_TSOB.pdf',
                [
                    'target' => '_blank',
                    'escape' => false
                ]
            ); ?>
        </li>
        <li>
            <?= $this->Html->link(
                '<i class="fas fa-file-alt m-2"></i>Recibo de postagem do SDAKDL02',
                '/webroot/files/Link_SDAKDL02.pdf',
                [
                    'target' => '_blank',
                    'escape' => false
                ]
            ); ?>
            <?= $this->Html->link(
                '<i class="fas fa-external-link-alt"></i> Acessar',
                'http://www.detrannet.empresas.mg.gov.br/salv/paginas/administracao/recibo-notificacao.asp',
                [
                    'target' => '_blank',
                    'class' => 'btn btn-sm',
                    'escape' => false
                ]
            ); ?>
        </li>
        <li>
            <?= $this->Html->link(
                '<i class="fas fa-file-pdf m-2"></i>Como obter JOB da fase SDAKDL02 no TSOB',
                '/webroot/files/Como_obter_JOB_da_fase_SDAKDL02_no_TSOB.pdf',
                [
                    'target' => '_blank',
                    'escape' => false
                ]
            ); ?>
        </li>
        <li>
            <?= $this->Html->link(
                '<i class="fas fa-file-pdf m-2"></i>Solicitar faixa de AR para SDAKDL02',
                '/webroot/files/Solicitar_faixa_de_AR_para_SDAKDL02.pdf',
                [
                    'target' => '_blank',
                    'escape' => false
                ]
            ); ?>
        </li>
        <li>
            <?= $this->Html->link(
                '<i class="fas fa-film m-2"></i>Etiquetas de Patrimônio',
                '/webroot/files/Gerar_etiquetas_Patrimônio.pdf',
                [
                    'target' => '_blank',
                    'escape' => false
                ]
            ); ?>
        </li>
        <li>
            <?= $this->Html->link(
                '<i class="fas fa-dot-circle m-2"></i>Gravação de CD (SMATM13)',
                '/webroot/files/Gravação_CD_SMATM13.pdf',
                [
                    'target' => '_blank',
                    'escape' => false
                ]
            ); ?>
        </li>
        <li>
            <?= $this->Html->link(
                '<i class="fas fa-film m-2"></i>SMAFE008, 009 e 010 (Relatório e etiquetas de prova da PM)',
                '/webroot/files/SMAFE_xxx.pdf',
                [
                    'target' => '_blank',
                    'escape' => false
                ]
            ); ?>
        </li>
        <li>
            <?= $this->Html->link(
                '<i class="fas fa-file-alt m-2"></i>Como gerar SS06EPAP',
                '/webroot/files/SS06EPAP.pdf',
                [
                    'target' => '_blank',
                    'escape' => false
                ]
            ); ?>
        </li>
        <li>
            <?= $this->Html->link(
                '<i class="fas fa-file-alt m-2"></i>Como Recuperar Recibo de Postagem',
                '/webroot/files/Recuperar_Recibo_de_Postagem.pdf',
                [
                    'target' => '_blank',
                    'escape' => false
                ]
            ); ?>
        </li>
    </ul>
    <hr>

    <h4>Envelopamento:</h4>
    <ul class="list-unstyled d-flex align-items-center flex-wrap text-center mt-3 mb-4 ajuda-gpqr">
        <li>
            <?= $this->Html->link(
                '<i class="fas fa-envelope m-2"></i>Manual Envelopamento',
                '/webroot/files/Manual_Envelopamento.pdf',
                [
                    'target' => '_blank',
                    'escape' => false
                ]
            ); ?>
        </li>
    </ul>
    <hr>

    <h4>Triagem:</h4>
    <ul class="list-unstyled d-flex align-items-center flex-wrap text-center mt-3 mb-4 ajuda-gpqr">
        <li>
            <?= $this->Html->link(
                '<i class="fas fa-check-square m-2"></i>Manual Triagem',
                '/webroot/files/Manual_Triagem.pdf',
                [
                    'target' => '_blank',
                    'escape' => false
                ]
            ); ?>
        </li>
    </ul>
    <hr>

    <h4>Expedição:</h4>
    <ul class="list-unstyled d-flex align-items-center flex-wrap text-center mt-3 mb-4 ajuda-gpqr">
        <li>
            <?= $this->Html->link(
                '<i class="fas fa-print m-2"></i>Digitalização de Remessa de Serviços',
                '/webroot/files/Digitalização_de_Remessa_de_Serviços.pdf',
                [
                    'target' => '_blank',
                    'escape' => false
                ]
            ); ?>
        </li>
        <li>
            <?= $this->Html->link(
                '<i class="fas fa-truck m-2"></i>Manual Expedição',
                '/webroot/files/Manual_Expedição.pdf',
                [
                    'target' => '_blank',
                    'escape' => false
                ]
            ); ?>
        </li>
    </ul>
</div>