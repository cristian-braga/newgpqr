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
<title>SS13E015</title>
</head>
<body style="font-family: Helvetica">
 <table border="1" width="100%">
    <tr>
      <th colspan="2"><img src="../webroot/img/logo_prodemge.png" width="100px"></th>
      <th colspan="8" style="text-align: center;padding: 3px;background-color: #DEDCDC">REMESSA DE SERVIÇO</th>
  </tr>
  <tr>
      <td colspan="10" style="font-size: 13px;text-align: center;padding: 8px;">COMPANHIA DE TECNOLOGIA DA INFORMAÇÃO DO ESTADO DE MINAS GERAIS<br>          RUA DA BAHIA, 2277 - Savassi - Belo Horizonte - MG - CEP: 30.160-019<br>                                                 TEL:(31) 3339-1600<br>                                              Recepção de serviços: 3339-1142</td>
  </tr>
  <tr>
      <td colspan="2" style="font-size: 12px;padding: 5px;">SISTEMA/FASE</td>
      <td colspan="5" style="border: none"><b>SS13E015</b></td>
      <td style="font-size: 12px">TELEFONE</td>
      <td colspan="2" style="text-align: center; font-size: 14px">2129-9583</td>
  </td>
</tr>
<tr>
  <td colspan="2" style="font-size: 12px;padding: 5px;">CLIENTE</td>
  <td colspan="5" style="border: none"><b>POLÍCIA CIVIL</b></td>
  <td style="font-size: 12px">REF.</td>
  <td colspan="2" style="text-align: center;font-size: 14px">'.$ss13e015['referencia'].'</td>
</tr>
<tr>
  <td colspan="2" style="font-size: 12px;padding: 5px;">LOCAL DE ENTREGA</td>
  <td colspan="5" style="border: none"><b>AV. JOÃO PINHEIRO, 417, BOA VIAGEM - 1° ANDAR</b></td>
</tr>
<tr>
  <td colspan="2" style="font-size: 12px;padding: 5px;">ENTREGAR A</td>
  <td colspan="5" style="border: none"><b></b></td>

</tr>
<tr style="background-color: #DEDCDC;">
  <!--<td style="text-align: center; padding: 5px;"><b>Produtos</b></td> -->
  <td colspan="6" style="text-align: center"><b>Descrição</b></td>
  <td style="text-align: center"><b>Cópias</b></td>
  <td style="text-align: center"><b>Páginas</b></td>
  <td style="text-align: center"><b>TOTAL</b></td>
  <td style="text-align: center"><b>JOB</b></td>
</tr>
<tr>
  <!--<td style="text-align: center; padding: 5px">RSMAF090</td>-->
  <td colspan="6" style="font-size: 13px" >Cancelamento de punições</td>
  <td style="text-align: center">'.$ss13e015['copias'].'</td>
  <td style="text-align: center">'.$ss13e015['paginas'].'</td>
  <td style="text-align: center" bgcolor="#DEDCDC"><b>'.$ss13e015['total'].'</b></td>
  <td style="text-align: center">'.$ss13e015['job'].'</td>
</tr>
<tr>
  <td colspan="10" style="text-align: center;padding: 8px;"><span style="font-weight:bold;font-size: 12px">RECLAMAÇÕES SERÃO ACEITAS ATÉ 05(CINCO) DIAS APÓS A ENTREGA DOS PRODUTOS</span><br><span style="font-size: 12px">DECLARO TER CONFERIDO E RECEBIDO O DESCRITO ACIMA</td></span>
</tr>
<tr style="background-color: #DEDCDC">
  <td colspan="5" style="text-align: center; padding: 5px"><b>PRODEMGE</b></td>
  <td colspan="5" style="text-align: center"><b>CLIENTE</b></td>
</tr>
<tr>
  <td colspan="2" style="text-align: center;padding: 5px;">Nome:</td>
  // <td colspan="2" style="font-weight:bold;text-align: center;">'.$ss13e015['funcionario'].'</td>
  <td colspan="1" style="text-align: center;">Data:</td>
  <td colspan="2" style="text-align: center;">Matrícula:</td>
  <td colspan="2"></td>
  <td colspan="1" style="text-align: center;">Data:</td>
</tr>
<tr>
  <td colspan="2" style="text-align: center; padding: 5px">Assinatura:</td>
  <td colspan="2"></td>
  <td colspan="1" style="text-align: center;">'.$ss13e015['data'].'</td>
  <td colspan="2" style="text-align: center;">Nome Legível:</td>
  <td colspan="2"></td>
  <td colspan="1"></td>
</tr>
</table>
<span style="font-size: 10px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;SITE: http://www.prodemge.mg.gov.br&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;E-MAIL: atendimento@prodemge.gov.br &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PRIMEIRA VIA - CLIENTE&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;SEGUNDA VIA - GIM    </span>
<br><br><br>
';
// pega o conteudo do buffer, insere na variavel e limpa a memória
ob_end_clean();

$mpdf->allow_charset_conversion = true;

// duplicar o pdf
$mpdf->WriteHTML($html);
for ($i = 0; $i < 1; $i++) {
  $mpdf->WriteHTML($html);
}
$mpdf->Output('Sdg1.pdf', \Mpdf\Output\Destination::INLINE);
// imprime  \Mpdf\Output\Destination::DOWNLOAD
return $response;
exit();
// finaliza o codigo