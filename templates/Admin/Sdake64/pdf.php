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
$html = '
<body style="font-family: Helvetica;">
<table border="1" width="100%">
<tr>
  <th colspan="2"><img src="../webroot/img/logo_prodemge.png" width="100px"></th>
  <th colspan="10" style="text-align: center;padding: 3px;background-color: #DEDCDC">REMESSA DE SERVIÇO</th>
  <!--<th colspan="3" style="text-align: center;">PROTOCOLO</th>-->
</tr>
<tr>
  <td colspan="12" style="font-size: 14px;text-align: center;padding: 9px;">COMPANHIA DE TECNOLOGIA DA INFORMAÇÃO DO ESTADO DE MINAS GERAIS<br>          Rua da Bahia, 2277 - Savassi - Belo Horizonte - MG - CEP: 30.160-019<br>                                                 TEL:(31) 3339-1600 -                                              Expedição de serviços: 3339-1142</td>
  <!--<td colspan="3" rowspan="2"></td>-->
</tr>
<tr>
  <td colspan="2" style="font-size: 13px;padding: 5px;">SISTEMA/FASE</td>
  <td colspan="5" style="border: none"><b>SDAKE64</b></td>
  <td colspan="3" style="font-size: 12px">TELEFONE</td>
  <td colspan="2" style="border: none"><b>3501-5488</b></td>
</tr>
<tr>
  <td colspan="2" style="font-size: 13px;padding: 5px;">CLIENTE</td>
  <td colspan="5" style="border: none"><b>Detran</b></td>
  <td colspan="3" style="font-size: 12px;padding: 5px;">ENTREGAR À</td>
  <td colspan="2" style="border: none"><b>Gerson</b></td>
</tr>
<tr>
  <td colspan="2" style="font-size: 13px;padding: 5px;">UNIDADE</td>
  <td colspan="5" style="border: none"><b>CAMG Prédio Gerais - 5° andar Assessoria Jurídica</b></td>
  <!-- <td style="font-size: 12px">REF.</td>
  <td colspan="2" style="text-align: center">'.$sdake64['referencia'].'</td> -->
</tr> 
<tr>
  <td colspan="1" style="text-align: center; background-color: #DEDCDC"><b>Item</b></td>
  <td colspan="1" style="text-align: center;padding: 5px; background-color: #DEDCDC"><b>Cópias</b></td>
  <td colspan="1" style="text-align: center;padding: 5px; background-color: #DEDCDC"><b>Páginas</b></td>
  <td colspan="1" style="text-align: center; background-color: #DEDCDC"><b>Total</b></td>
  <td colspan="7" style="text-align: center; background-color: #DEDCDC"><b>Descrição</b></td>
  <td colspan="1" style="text-align: center;padding: 5px; background-color: #DEDCDC"><b>JOB</b></td>
</tr>
<tr>
  <td colspan="1" style="text-align: center">1</td>
  <td colspan="1" style="text-align: center;padding: 3px;font-size: 16px">'.$sdake64['copias'].'</td>
  <td colspan="1" style="text-align: center;font-size: 15px">'.$sdake64['paginas'].'</td>
  <td colspan="1" style="text-align: center;font-size: 15px">'.$sdake64['total'].'</td>
  <td colspan="7" style="text-align: center">Veículos com Averbação Incluída </td>
  <td colspan="1" style="text-align: center;font-size: 15px">'.$sdake64['job'].'</td>
</tr>
  <tr>
  <td colspan="1" style="text-align: center">2</td>
  <td colspan="1" style="text-align: center;padding: 3px;font-size: 16px">'.$sdake64['copias1'].'</td>
  <td colspan="1" style="text-align: center;font-size: 15px">'.$sdake64['paginas1'].'</td>
  <td colspan="1" style="text-align: center;font-size: 15px">'.$sdake64['total1'].'</td>
  <td colspan="7" style="text-align: center">Veículos Não Incluídos - Fora de Circulação</td>
  <td colspan="1" style="text-align: center; font-size: 15px">'.$sdake64['job'].'</td>
</tr>
<tr>
  <td colspan="1" style="text-align: center">3</td>
  <td colspan="1" style="text-align: center;padding: 3px;font-size: 16px">'.$sdake64['copias2'].'</td>
  <td colspan="1" style="text-align: center;font-size: 15px">'.$sdake64['paginas2'].'</td>
  <td colspan="1" style="text-align: center;font-size: 15px">'.$sdake64['total2'].'</td>
  <td colspan="7" style="text-align: center">Veículos Não Incluídos - Com Comunicação de Venda</td>
  <td colspan="1" style="text-align: center;font-size: 15px">'.$sdake64['job'].'</td>
</tr>
<tr>
  <td colspan="1" style="text-align: center">4</td>
  <td colspan="1" style="text-align: center;padding: 3px;font-size: 16px">'.$sdake64['copias3'].'</td>
  <td colspan="1" style="text-align: center;font-size: 15px">'.$sdake64['paginas3'].'</td>
  <td colspan="1" style="text-align: center;font-size: 15px">'.$sdake64['total3'].'</td>
  <td colspan="7" style="text-align: center">Veículos Não Incluídos - Com Reserva de Restrição</td>
  <td colspan="1" style="text-align: center;font-size: 15px">'.$sdake64['job'].'</td>
</tr>
<tr>
  <td colspan="1" style="text-align: center">5</td>
  <td colspan="1" style="text-align: center;padding: 3px;font-size: 16px">'.$sdake64['copias4'].'</td>
  <td colspan="1" style="text-align: center;font-size: 15px">'.$sdake64['paginas4'].'</td>
  <td colspan="1" style="text-align: center;font-size: 15px">'.$sdake64['total4'].'</td>
  <td colspan="7" style="text-align: center">Veículos em Processo de Leilão</td>
  <td colspan="1" style="text-align: center;font-size: 15px">'.$sdake64['job'].'</td>
</tr>
<tr>
  <td colspan="3" style="text-align: center" bgcolor="#DEDCDC"><b>TOTAL</b></td>
  <td colspan="1" style="text-align: center" bgcolor="#DEDCDC"><b>'.$sdake64['totaltudo'].'</b></td>
  <td colspan="8" style="text-align: left" bgcolor="#DEDCDC"><b></b></td>
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
  <td colspan="1" style="font-weight:bold;text-align: center;">'.$sdake64['funcionario'].'</td>
  <td colspan="1" style="text-align: center;">Data:</td>
  <td colspan="1" style="text-align: center;">Matrícula:</td>
  <td colspan="5"></td>
  <td colspan="3" style="text-align: center;">Data:</td>
</tr>
<tr>
  <td colspan="1" style="text-align: center; padding: 5px">Assinatura:</td>
  <td colspan="1"></td>
  <td colspan="1" style="text-align: center;">'.$sdake64['dataAtual'].'</td>
  <td colspan="1" style="text-align: center;">Nome Legível:</td>
  <td colspan="5"></td>
  <td colspan="3"></td>
</tr>
</table>
</body>';

// pega o conteudo do buffer, insere na variavel e limpa a memória
ob_end_clean();

$mpdf->allow_charset_conversion = true;

$mpdf->WriteHTML($html);

$mpdf->Output('Sdake64.pdf', \Mpdf\Output\Destination::INLINE);
// imprime  \Mpdf\Output\Destination::DOWNLOAD

return $response;

exit();
// finaliza o codigo
