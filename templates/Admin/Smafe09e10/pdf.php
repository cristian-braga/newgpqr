<?php
use Mpdf\Mpdf;

$response = $this->response->withType('application/pdf');

$mpdf = new Mpdf();

//Ativa o buffer de saída
ob_start();

// pega o conteudo do buffer, insere na variavel e limpa a memória
ob_end_clean();

$mpdf->allow_charset_conversion = true;

// criar as colunas no Banco e puxar elas aqui para ficar dinamico
$html = '<head>
  <title>'.$smafe09e10['sistema'].'</title>
  </head
  <body style="font-family: Helvetica">
	<table border="1" width="100%">
  <tr>
    <th colspan="2"><img src="../webroot/img/logo_prodemge.png" width="100px"></th>
    <th colspan="10" style="text-align: center;padding: 3px;background-color: #DEDCDC">REMESSA DE SERVIÇO</th>
  </tr>
  <tr>
    <td colspan="12" style="font-size: 13px;text-align: center;padding: 6px;">COMPANHIA DE TECNOLOGIA DA INFORMAÇÃO DO ESTADO DE MINAS GERAIS<br>          RUA DA BAHIA, 2277 - Savassi - Belo Horizonte - MG - CEP: 30.160-019<br>                                                 TEL:(31) 3339-1600 -                                              Expedição de Serviços: 3339-1142</td>
  </tr>
  <tr>
    <td colspan="2" style="font-size: 12px;padding: 5px;">SISTEMA/FASE</td>
    <td colspan="5" style="border: none"><b>'.$smafe09e10['sistema'].'</b></td>
    <td style="font-size: 12px">CONCURSO</td>
    <td colspan="4" style="text-align: center; font-size: 14px"><b>'.$smafe09e10['concurso'].'</b></td>
  </tr>
  <tr>
    <td colspan="2" style="font-size: 12px;padding: 5px;">CLIENTE</td>
    <td colspan="5" style="border: none"><b>PMMG</b></td>
    <td style="font-size: 12px">TELEFONE</td>
    <td colspan="4" style="text-align: center; font-size: 14px">2123-9504</td>
  </tr>
  <tr>
    <td colspan="2" style="font-size: 12px;padding: 5px;">LOCAL DE ENTREGA</td>
    <td colspan="5" style="border: none"><b>Recursos Humanos - Concursos</b></td>
    <td style="font-size: 12px">REMESSA</td>
    <td colspan="4" style="text-align: center;font-size: 14px">ON-LINE</td>
  </tr>
  <tr>
    <td colspan="2" style="font-size: 12px;padding: 5px;">ENTREGAR A</td>
    <td colspan="5" style="border: none"><b>Sgt. Mendes</b></td>
    <td style="font-size: 12px">REF.</td>
    <td colspan="4" style="text-align: center;font-size: 14px">'.$smafe09e10['referencia'].'</td>
  </tr>
 
<tr>
  <td colspan="2" style="text-align: center;padding: 5px; background-color: #DEDCDC"><b>Produto</b></td>
  <td colspan="1" style="text-align: center;padding: 5px; background-color: #DEDCDC"><b>Quantidade</b></td>
  <td colspan="8" style="text-align: center; background-color: #DEDCDC"><b>Descrição</b></td>
  <td colspan="1" style="text-align: center;padding: 5px; background-color: #DEDCDC"><b>JOB</b></td>
</tr>
<tr>
  <td colspan="2" style="text-align: center;padding: 3px;font-size: 16px">Etiquetas</td>
  <td colspan="1" style="text-align: center;font-size: 15px">'.$smafe09e10['quantidade_etiquetas'].'</td>
  <td colspan="8" style="text-align: center">Etiquetas para Envelope de Prova </td>
  <td colspan="1" style="text-align: center;font-size: 15px">'.$smafe09e10['job'].'</td>
</tr>
<tr>
  <td colspan="2" style="text-align: center" bgcolor="#DEDCDC"><b>TOTAL</b></td>
  <td colspan="1" style="text-align: center" bgcolor="#DEDCDC"><b>'.$smafe09e10['quantidade_etiquetas'].'</b></td>
  <td colspan="9" style="text-align: center" bgcolor="#DEDCDC"><b>ETIQUETAS<b></b></td>
</tr>
<tr>
  <td colspan="12" style="text-align: center;padding: 7px;">
  <span style="font-weight:bold;font-size: 13px; ">RECLAMAÇÕES SERÃO ACEITAS ATÉ 05(CINCO) DIAS APÓS A ENTREGA DOS PRODUTOS<br>DECLARO TER CONFERIDO E RECEBIDO O DESCRITO ACIMA</span></td>
</tr>
<tr>
  <td colspan="3" style="text-align: center; padding: 5px;">PRODEMGE</td>
  <td colspan="9" style="text-align: center">CLIENTE</td>
</tr>
<tr>
  <td colspan="1" style="text-align: center;padding: 5px;">Nome:</td>
  <td colspan="1" style="font-weight:bold;text-align: center;">'.$smafe09e10['funcionario'].'</td>
  <td colspan="1" style="text-align: center;">Data:</td>
  <td colspan="1" style="text-align: center;">Matrícula:</td>
  <td colspan="5"></td>
  <td colspan="3" style="text-align: center;">Data:</td>
</tr>
<tr>
  <td colspan="1" style="text-align: center; padding: 5px">Assinatura:</td>
  <td colspan="1"></td>
  <td colspan="1" style="text-align: center;">'.$smafe09e10['dataAtual'].'</td>
  <td colspan="1" style="text-align: center;">Nome Legível:</td>
  <td colspan="5"></td>
  <td colspan="3"></td>
</tr>
</table><br><br>
</body>';

// pega o conteudo do buffer, insere na variavel e limpa a memória
ob_end_clean();

$mpdf->allow_charset_conversion = true;

// duplicar o pdf
$mpdf->WriteHTML($html);

for ($i = 0; $i < 1; $i++) {
  $mpdf->WriteHTML($html);
}


$mpdf->Output('Smafe09e10.pdf', \Mpdf\Output\Destination::INLINE);
// imprime  \Mpdf\Output\Destination::DOWNLOAD

return $response;

exit();
// finaliza o codigo

