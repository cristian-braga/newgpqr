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
<title>ETIQUETAS PM</title>
</head
<body style="font-family: Helvetica">
  <table border="1" width="100%">
<tr>
  <th colspan="2"><img src="../webroot/img/logo_prodemge.png" width="100px"></th>
  <th colspan="8" style="text-align: center;padding: 3px;background-color: #DEDCDC">REMESSA DE SERVIÇO</th>
</tr>
<tr>
  <td colspan="10" style="font-size: 15px;text-align: center;padding: 8px;">COMPANHIA DE TECNOLOGIA DA INFORMAÇÃO DO ESTADO DE MINAS GERAIS<br>          RUA DA BAHIA, 2277 - Savassi - Belo Horizonte - MG - CEP: 30.160-019<br>                                                 TEL:(31) 3339-1600                                             - Recepção de serviços: 3339-1142</td>
</tr>
<tr>
  <td colspan="2" style="font-size: 15px;padding: 5px;">SERVIÇO</td>
  <td colspan="5" style="border: none; font-size: 16px"><b>Etiquetas PMMG</b></td>
  <td style="font-size: 15px">CONCURSO</td>
  <td colspan="2" style="text-align: center; font-size: 16px"><b>'.$etiquetasPm['concurso'].'</b></td>
</tr>
<tr>
  <td colspan="2" style="font-size: 15px;padding: 5px;">ENTREGAR A</td>
  <td colspan="5" style="border: none; font-size: 16px"><b>Sargento Mendes</b></td>
  <td style="font-size: 15px">TELEFONE</td>
  <td colspan="2" style="text-align: center; font-size: 14px">2123-9504</td>
</tr>
<tr style="background-color: #DEDCDC;">
  <td style="text-align: center; padding: 5px; font-size: 17px"><b>Etiquetas</b></td>
  <td style="text-align: center; padding: 5px; font-size: 17px"><b>Cópias</b></td>
  <td style="text-align: center; padding: 5px; font-size: 17px"><b>Total</b></td>
  <td colspan="7" style="text-align: center; padding: 5px; font-size: 17px"><b>Descrição</b></td>
</tr>
<tr>

  <td style="text-align: center; font-size: 17px">'.$etiquetasPm['quantidade_etiquetas'].'</td>
  <td style="text-align: center; font-size: 17px">'.$etiquetasPm['copias'].'</td>
  <td style="text-align: center; font-size: 17px">'.$etiquetasPm['total'].'</td>
  <td colspan="7" style="font-size: 15px; center; padding: 7px;" >'.$etiquetasPm['descricao'].'</td>
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
  // <td colspan="2" style="font-weight:bold;text-align: center;">'.$etiquetasPm['funcionario'].'</td>
  <td colspan="1" style="text-align: center;">Data:</td>
  <td colspan="2" style="text-align: center;">Matrícula:</td>
  <td colspan="2"></td>
  <td colspan="1" style="text-align: center;">Data:</td>
</tr>
<tr>
  <td colspan="2" style="text-align: center; padding: 5px">Assinatura:</td>
  <td colspan="2"></td>
  <td colspan="1" style="text-align: center;">'.$etiquetasPm['data'].'</td>
  <td colspan="2" style="text-align: center;">Nome Legível:</td>
  <td colspan="2"></td>
  <td colspan="1"></td>
</tr>
</table>
<span style="font-size: 10px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;SITE: http://www.prodemge.mg.gov.br&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;E-MAIL: atendimento@prodemge.gov.br &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PRIMEIRA VIA - CLIENTE&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;SEGUNDA VIA - GIM    </span>
<br><br><br><br>
';
// pega o conteudo do buffer, insere na variavel e limpa a memória
ob_end_clean();

$mpdf->allow_charset_conversion = true;

// duplicar o pdf
$mpdf->WriteHTML($html);

for ($i = 0; $i < 1; $i++) {
  $mpdf->WriteHTML($html);
}

$mpdf->Output('EtiquetasPMMG.pdf', \Mpdf\Output\Destination::INLINE);
// imprime  \Mpdf\Output\Destination::DOWNLOAD

return $response;

exit();
// finaliza o codigo
