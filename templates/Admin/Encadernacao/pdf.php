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
<title>'.$encadernacao['sistema'].'Encadernação'.$encadernacao['solicitacao'].'</title>
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
  <td colspan="1" style="font-size: 13px;padding: 5px;">SERVIÇO</td>
  <td colspan="5" style="border: none"><b>ENCADERNAÇÃO</b></td>
</tr>
<tr>
  <td colspan="1" style="font-size: 13px;padding: 5px;">SOLICITANTE</td>
  <td colspan="5" style="border: none"><b>'.$encadernacao['solicitante'].'</b></td>
</tr>
<tr>
  <td colspan="1" style="font-size: 13px;padding: 5px;">DESCRIÇÃO DO SERVIÇO</td>
  <td colspan="5" style="border: none"><b>'.$encadernacao['descricao'].'</b></td>
</tr>


<tr>
  <td colspan="4" style="text-align: center;padding: 5px; background-color: #DEDCDC"><b>Tipo de Capa:</b></td>
  <td colspan="1" style="text-align: center;padding: 5px; background-color: #DEDCDC"><b>Cópias</b></td>
  <td colspan="" style="text-align: center;padding: 5px; background-color: #DEDCDC"><b>Páginas</b></td>
  <td colspan="1" style="text-align: center;padding: 5px; background-color: #DEDCDC"><b>Capas</b></td>
  <td colspan="5" style="text-align: center;padding: 5px; background-color: #DEDCDC"><b>Ocorrência</b></td>
 
</tr>
<tr>
  <td colspan="4" style="text-align: center; padding: 5px;">'.$encadernacao['tipo_capa'].'</td>
  <td colspan="1" style="text-align: center">'.$encadernacao['copias'].'</td>
  <td colspan="1" style="text-align: center">'.$encadernacao['paginas'].'</td>
  <td colspan="1" style="text-align: center">'.$encadernacao['capas'].'</td>
  <td colspan="5" style="text-align: center">'.$encadernacao['ocorrencia'].'</td>
  <!--<td colspan="5" style="font-size: 13px">&nbsp;&nbsp;Demonstrativos de Pagamento Aposentadoria</td>-->    
</tr>
<tr>
  <td colspan="4" style="text-align: center ;padding: 3px;" bgcolor="#DEDCDC"><b>TOTAL</b></td>
  <td colspan="1" style="text-align: center ;padding: 3px;" bgcolor="#DEDCDC"><b>'.$encadernacao['total'].'</b></td>
  <td colspan="7" bgcolor="#DEDCDC"></td>
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
  <td colspan="3" style="font-weight:bold;text-align: center;">'.$encadernacao['funcionario'].'</td>
  <td colspan="1" style="text-align: center;">Data:</td>
  <td colspan="1" style="text-align: center;">Matrícula:</td>
  <td colspan="3"></td>
  <td colspan="3" style="text-align: center;">Data:</td>
</tr>
<tr>
  <td colspan="1" style="text-align: center; padding: 5px">Assinatura:</td>
  <td colspan="3"></td>
  <td colspan="1" style="text-align: center;">'.$encadernacao['dataAtual'].'</td>
  <td colspan="1" style="text-align: center;">Nome Legível:</td>
  <td colspan="3"></td>
  <td colspan="3"></td>
</tr>
</table>
<span style="font-size: 10px;"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;SITE: http://www.prodemge.mg.gov.br&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;E-MAIL: atendimento@prodemge.gov.br &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PRIMEIRA VIA - CLIENTE&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;SEGUNDA VIA - GIM    </span>
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

$mpdf->Output('Encadernacao.pdf', \Mpdf\Output\Destination::INLINE);
// imprime  \Mpdf\Output\Destination::DOWNLOAD

return $response;

exit();
// finaliza o codigo
