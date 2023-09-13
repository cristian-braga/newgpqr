<?php
use Mpdf\Mpdf;

$response = $this->response->withType('application/pdf');

$mpdf = new Mpdf();

//Ativa o buffer de saída
ob_start();

// pega o conteudo do buffer, insere na variavel e limpa a memória
ob_end_clean();

$mpdf->allow_charset_conversion = true;

$html = '<head>
  <title>'.$impressaoEncadernacao['sistema'].'Impressão e Encadernação'.$impressaoEncadernacao['solicitacao'].'</title>
  </head>
  <body style="font-family: Helvetica">
  <table border="1" width="100%">
  <tr>
    <th colspan="2"><img src="../webroot/img/logo_prodemge.png" width="100px"></th>
    <th colspan="10" style="text-align: center;padding: 3px;background-color: #DEDCDC">REMESSA DE SERVIÇO</th>
  </tr>
  <tr>
    <td colspan="12" style="font-size: 14px;text-align: center;padding: 9px;">COMPANHIA DE TECNOLOGIA DA INFORMAÇÃO DO ESTADO DE MINAS GERAIS<br>          Rua da Bahia, 2277 - Savassi - Belo Horizonte - MG - CEP: 30.160-019<br>                                                 TEL:(31) 3339-1600 -                                              Expedição de serviços: 3339-1142</td>
  </tr>
  <tr>
    <td colspan="1" style="font-size: 11px;padding: 5px;">SERVIÇO</td>
    <td colspan="11" style="border: none"><b>IMPRESSÃO/ENCADERNAÇÃO</b></td>
  </tr>
  <tr>
    <td colspan="1" style="font-size: 11px;padding: 5px;">SOLICITANTE</td>
    <td colspan="11" style="border: none"><b>'.$impressaoEncadernacao['solicitante'].'</b></td>
  </tr>
  <tr>
    <td colspan="1" style="font-size: 11px;padding: 5px;">DESCRIÇÃO DO SERVIÇO</td>
    <td colspan="11" style="border: none"><b>'.$impressaoEncadernacao['descricao'].'</b></td>
  </tr>
  <tr>
    <td colspan="1" style="font-size: 11px;padding: 5px;">OCORRÊNCIA</td>
    <td colspan="11" style="border: none"><b>'.$impressaoEncadernacao['ocorrencia'].'</b></td>
  </tr>

  <tr>
    <td colspan="3" style="text-align: center;padding: 5px; background-color: #DEDCDC"><b>Serviço:</b></td>
    <td colspan="3" style="text-align: center;padding: 5px; background-color: #DEDCDC"><b>Tipo Impressão e Capa:</b></td>
    <td colspan="2" style="text-align: center;padding: 5px; background-color: #DEDCDC"><b>Cópias</b></td>
    <td colspan="2" style="text-align: center;padding: 5px; background-color: #DEDCDC"><b>Páginas</b></td>
    <td colspan="1" style="text-align: center;padding: 5px; background-color: #DEDCDC"><b>Capas</b></td>
    <td colspan="1" style="text-align: center;padding: 5px; background-color: #DEDCDC"><b>Total</b></td>
  </tr>
  <tr>
    <td colspan="3" style="text-align: center; padding: 9px;"><b>IMPRESSÃO</b></td>
    <td colspan="3" style="text-align: center; padding: 9px;">'.$impressaoEncadernacao['tipo_imp'].'</td>
    <td colspan="2" style="text-align: center; padding: 9px;">'.$impressaoEncadernacao['copias_imp'].'</td>
    <td colspan="2" style="text-align: center; padding: 9px;">'.$impressaoEncadernacao['paginas_imp'].'</td>
    <td colspan="1" bgcolor="#DEDCDC" style="text-align: center; padding: 5px;"></td>
    <td colspan="1" style="text-align: center ;padding: 9px;" bgcolor="#DEDCDC"><b>'.$impressaoEncadernacao['total_imp'].'</b></td>
  </tr>

  <tr>
  <td colspan="3" style="text-align: center; padding: 9px;"><b>ENCADERNAÇÃO</b></td>
  <td colspan="3" style="text-align: center; padding: 9x;">'.$impressaoEncadernacao['tipo_capa'].'</td>
  <td colspan="2" style="text-align: center; padding: 9px;">'.$impressaoEncadernacao['copias_imp'].'</td>
  <td colspan="2" style="text-align: center; padding: 9px;">'.$impressaoEncadernacao['paginas_imp'].'</td>
  <td colspan="1" style="text-align: center"; padding: 9px;>'.$impressaoEncadernacao['quant_capa'].'</td>
  <td colspan="1" style="text-align: center ;padding: 9px;" bgcolor="#DEDCDC"><b>'.$impressaoEncadernacao['total_imp'].'</b></td>
</tr>
  <tr>
    <td colspan="12" style="text-align: center;padding: 7px;"><span style="font-weight:bold;font-size: 13px; ">DECLARO TER CONFERIDO E RECEBIDO O DESCRITO ACIMA</span></td>
  </tr>
  <tr>
    <td colspan="5" style="text-align: center; padding: 5px;">PRODEMGE</td>
    <td colspan="7" style="text-align: center">SOLICITANTE</td>
  </tr>
  <tr>
    <td colspan="1" style="text-align: center;padding: 5px;">Nome:</td>
    <td colspan="3" style="font-weight:bold;text-align: center;">'.$impressaoEncadernacao['funcionario'].'</td>
    <td colspan="1" style="text-align: center;">Data:</td>
    <td colspan="1" style="text-align: center;">Matrícula:</td>
    <td colspan="4"></td>
    <td colspan="2" style="text-align: center;">Data:</td>
  </tr>
  <tr>
    <td colspan="1" style="text-align: center; padding: 5px">Assinatura:</td>
    <td colspan="3"></td>
    <td colspan="1" style="text-align: center;">'.$impressaoEncadernacao['dataAtual'].'</td>
    <td colspan="1" style="text-align: center;">Nome Legível:</td>
    <td colspan="4"></td>
    <td colspan="2"></td>
  </tr>
</table>
<span style="font-size: 10px;"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;SITE: http://www.prodemge.mg.gov.br&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;E-MAIL: atendimento@prodemge.gov.br &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PRIMEIRA VIA - CLIENTE&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;SEGUNDA VIA - GIM    </span>
<br><br>'; 
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