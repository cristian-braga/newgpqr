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
  <title>' . $cd['sistema'] . 'CD' . $cd['solicitacao'] . '</title>
  </head>
  <body style="font-family: Helvetica">
    <table border="1" width="100%">
  <tr>
    <th colspan="2"><img src="../webroot/img/logo_prodemge.png" width="100px"></th>
    <th colspan="10" style="text-align: center;padding: 3px;background-color: #DEDCDC">REMESSA DE SERVIÇO</th>
    <!--<th colspan="3" style="text-align: center;">PROTOCOLO</th>-->
  </tr>
  <tr>
    <td colspan="12" style="font-size: 14px;text-align: center;padding: 9px;">COMPANHIA DE TECNOLOGIA DA INFORMAÇÃO DO ESTADO DE MINAS GERAIS<br>          RUA DA BAHIA, 2277 - Lourdes - Belo Horizonte - MG - CEP: 30.160-012<br>                                                 TEL:(31) 3339-1600 -                                              Recepção de serviços: 3339-1142</td>
    <!--<td colspan="3" rowspan="2"></td>-->
  </tr>
  <tr>
    <td colspan="2" style="font-size: 13px;padding: 5px;">SERVIÇO</td>
    <td colspan="5" style="border: none"><b>CD</b></td>
  </tr>
  <tr>
    <td colspan="2" style="font-size: 13px;padding: 5px;">CLIENTE</td>
    <td colspan="5" style="border: none"><b>' . $cd['cliente'] . '</b></td>
    <!--<td style="font-size: 12px">TELEFONE</td>
    <td colspan="2" style="text-align: center">????-????</td>
  </tr>
  <tr>
    <td colspan="2" style="font-size: 13px;padding: 5px;">LOCAL DE RETIRADA</td>
    <td colspan="5" style="border: none"><b>Setor de Expedição</b></td>
    <td style="font-size: 12px">REMESSA</td>
    <td colspan="2" style="text-align: center">E-MAIL</td>
  </tr>-->
  <tr>
    <td colspan="2" style="font-size: 13px;padding: 5px;">SOLICITANTE</td>
    <td colspan="5" style="border: none"><b>' . $cd['solicitante'] . '</b></td>
    <!-- <td style="font-size: 12px">REF.</td>
    <td colspan="2" style="text-align: center">' . $saalm['referencia'] . '</td> -->
  </tr>
  <tr>
    <td colspan="5" style="text-align: center; background-color: #DEDCDC"><b>Descrição</b></td>
    <td colspan="2" style="text-align: center; background-color: #DEDCDC"><b>Quantidade</b></td>
    <td colspan="5" style="text-align: center; background-color: #DEDCDC"><b>Ocorrencia</b></td>

    <!--<td colspan="1" style="text-align: center; background-color: #DEDCDC"><b>Total</b></td>
    <td colspan="1" style="text-align: center;padding: 5px; background-color: #DEDCDC"><b>Capas</b></td>
    <td colspan="4" style="text-align: center;padding: 5px; background-color: #DEDCDC"><b>JOB</b></td>-->
  </tr>
<tr>
      <td colspan="5" style="text-align: center;font-size: 15px">' . $cd['descricao'] . '</td>
      <td colspan="2" style="text-align: center;font-size: 15px">' . $cd['quantidade'] . '</td>
      <td colspan="5" style="text-align: center;font-size: 15px">' . $cd['ocorrencia'] . '</td>
  </tr>
  <tr>
    <td colspan="12" style="text-align: center;padding: 7px;">
    <span style="font-weight:bold;font-size: 13px; ">DECLARO TER CONFERIDO E RECEBIDO O DESCRITO ACIMA</span></td>
  </tr>
  <tr>
    <td colspan="3" style="text-align: center; padding: 5px;">PRODEMGE</td>
    <td colspan="9" style="text-align: center">SOLICITANTE</td>
  </tr>
  <tr>
    <td colspan="1" style="text-align: center;padding: 5px;">Nome:</td>
    <td colspan="1" style="font-weight:bold;text-align: center;">' . $cd['funcionario'] . '</td>
    <td colspan="1" style="text-align: center;">Data:</td>
    <td colspan="1" style="text-align: center;">Matrícula:</td>
    <td colspan="3"></td>
    <td colspan="5" style="text-align: center;">Data:</td>
  </tr>
  <tr>
    <td colspan="1" style="text-align: center; padding: 5px">Assinatura:</td>
    <td colspan="1"></td>
    <td colspan="1" style="text-align: center;">' . $cd['dataAtual'] . '</td>
    <td colspan="1" style="text-align: center;">Nome Legível:</td>
    <td colspan="3"></td>
    <td colspan="5"></td>
  </tr>
</table>
<span style="font-size: 10px;"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;SITE: http://www.prodemge.mg.gov.br&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;E-MAIL: atendimento@prodemge.gov.br &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PRIMEIRA VIA - CLIENTE&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;SEGUNDA VIA - GIM    </span><br><br><br><br><br><br>

  </body>';
// pega o conteudo do buffer, insere na variavel e limpa a memória
ob_end_clean();

$mpdf->allow_charset_conversion = true;

// duplicar o pdf
$mpdf->WriteHTML($html);

for ($i = 0; $i < 1; $i++) {
  $mpdf->WriteHTML($html);
}

$mpdf->Output('Cd.pdf', \Mpdf\Output\Destination::INLINE);
// imprime  \Mpdf\Output\Destination::DOWNLOAD

return $response;

exit();
// finaliza o codigo
