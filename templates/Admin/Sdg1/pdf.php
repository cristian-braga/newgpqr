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
  <title>'.$sdg1['sistema'].'SDG1M001'.$sdg1['solicitacao'].'</title>
  </head>
  <body style="font-family: Helvetica">
	<table border="1" width="100%">
  <tr>
    <th colspan="2"><img src="../webroot/img/logo_prodemge.png" width="100px"></th>
    <th colspan="10" style="text-align: center;padding: 3px;background-color: #DEDCDC">REMESSA DE SERVIÇO</th>
    <!--<th colspan="3" style="text-align: center;">PROTOCOLO</th>-->
  </tr>
  <tr>
    <td colspan="12" style="font-size: 14px;text-align: center;padding: 9px;">COMPANHIA DE TECNOLOGIA DA INFORMAÇÃO DO ESTADO DE MINAS GERAIS<br>          RUA DA BAHIA, 2277 - Savassi - Belo Horizonte - MG - CEP: 30.160-019<br>                                                 TEL:(31) 3339-1600 -                                              Recepção de serviços: 3339-1142</td>
    <!--<td colspan="3" rowspan="2"></td>-->
  </tr>
  <tr>
    <td colspan="2" style="font-size: 13px;padding: 5px;">SISTEMA/FASE</td>
    <td colspan="5" style="border: none"><b>SDG1M001</b></td>
  </tr>
  <tr>
    <td colspan="2" style="font-size: 13px;padding: 5px;">CLIENTE</td>
    <td colspan="5" style="border: none"><b>DETRAN</b></td>
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
    <td colspan="2" style="font-size: 13px;padding: 5px;">UNIDADE</td>
    <td colspan="5" style="border: none"><b>Setor de Inscrição - Edifício Gerais - 5º andar</b></td>
    <!-- <td style="font-size: 12px">REF.</td>
    <td colspan="2" style="text-align: center">'.$sdg1['referencia'].'</td> -->
  </tr> 

  <tr>

    <td colspan="4" style="text-align: center; background-color: #DEDCDC"><b>Descrição</b></td>
    <td colspan="1" style="text-align: center;padding: 5px; background-color: #DEDCDC"><b>Cópias</b></td>
    <td colspan="1" style="text-align: center;padding: 5px; background-color: #DEDCDC"><b>Páginas</b></td>
    <td colspan="1" style="text-align: center; background-color: #DEDCDC"><b>Total</b></td>
    <td colspan="1" style="text-align: center;padding: 5px; background-color: #DEDCDC"><b>Capas</b></td>
    <td colspan="4" style="text-align: center;padding: 5px; background-color: #DEDCDC"><b>JOB</b></td>
  </tr>
  <tr>
    <td colspan="4" style="text-align: center">Exclusão de Pendências</td>
    <td colspan="1" style="text-align: center;padding: 3px;font-size: 16px">'.$sdg1['copias'].'</td>
    <td colspan="1" style="text-align: center;font-size: 15px">'.$sdg1['paginas'].'</td>
    <td colspan="1" style="text-align: center;font-size: 15px">'.$sdg1['total'].'</td>
    <td colspan="1" style="text-align: center;font-size: 15px">'.$sdg1['capa'].'</td>
    <td colspan="4" style="text-align: center;font-size: 15px">'.$sdg1['job'].'</td>
  </tr>
   <tr>
    <td colspan="6" style="text-align: center; background-color: #DEDCDC"><b>TOTAL:</b></td>
    <td colspan="1" style="text-align: center;font-size: 15px;background-color: #DEDCDC"><b>'.$sdg1['total'].'</b></td>
    <td colspan="1" style="text-align: center;font-size: 15px;background-color: #DEDCDC"><b>'.$sdg1['capa'].'</b></td>
    <td colspan="4" style="text-align: center; font-size: 15px;background-color: #DEDCDC"></td>
  </tr>
  <!-- <tr>
    <td colspan="3" style="text-align: center;padding: 3px;" bgcolor="#DEDCDC"><b></b></td>
    <td colspan="2" style="text-align: center" bgcolor="#DEDCDC"><b>TOTAL:&nbsp;</b></td>
    <td colspan="7" style="text-align: center" bgcolor="#DEDCDC"><b>'.$sdg1['total2'].'</b>
  </tr> -->
  <tr>
    <td colspan="12" style="text-align: center;padding: 7px;">
    <span style="font-weight:bold;font-size: 13px; "> RECLAMAÇÕES SERÃO ACEITAS ATÉ 05(CINCO) DIAS APÓS A ENTREGA DOS PRODUTOS<br>DECLARO TER CONFERIDO E RECEBIDO O DESCRITO ACIMA</span></td>
  </tr>
  <tr>
    <td colspan="3" style="text-align: center; padding: 5px;">PRODEMGE</td>
    <td colspan="9" style="text-align: center">CLIENTE</td>
  </tr>
  <tr>
    <td colspan="1" style="text-align: center;padding: 5px;">Nome:</td>
    <td colspan="1" style="font-weight:bold;text-align: center;">'.$sdg1['funcionario'].'</td>
    <td colspan="1" style="text-align: center;">Data:</td>
    <td colspan="1" style="text-align: center;">Matrícula:</td>
    <td colspan="3"></td>
    <td colspan="5" style="text-align: center;">Data:</td>
  </tr>
  <tr>
    <td colspan="1" style="text-align: center; padding: 5px">Assinatura:</td>
    <td colspan="1"></td>
    <td colspan="1" style="text-align: center;">'.$sdg1['dataAtual'].'</td>
    <td colspan="1" style="text-align: center;">Nome Legível:</td>
    <td colspan="3"></td>
    <td colspan="5"></td>
  </tr>
</table>
<span style="font-size: 10px;"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;SITE: http://www.prodemge.mg.gov.br&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;E-MAIL: atendimento@prodemge.gov.br &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PRIMEIRA VIA - CLIENTE&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;SEGUNDA VIA - GIM    </span>
<br><br><br><br><br><br>
<!-- **********************************************************************************************************************************************-->
<table border="1" width="100%">
<tr>
  <th colspan="2"><img src="../webroot/img/logo_prodemge.png" width="100px"></th>
  <th colspan="10" style="text-align: center;padding: 3px;background-color: #DEDCDC">REMESSA DE SERVIÇO</th>
  <!--<th colspan="3" style="text-align: center;">PROTOCOLO</th>-->
</tr>
<tr>
  <td colspan="12" style="font-size: 14px;text-align: center;padding: 9px;">COMPANHIA DE TECNOLOGIA DA INFORMAÇÃO DO ESTADO DE MINAS GERAIS<br>          RUA DA BAHIA, 2277 - Savassi - Belo Horizonte - MG - CEP: 30.160-019<br>                                                 TEL:(31) 3339-1600 -                                              Recepção de serviços: 3339-1142</td>
  <!--<td colspan="3" rowspan="2"></td>-->
</tr>
<tr>
  <td colspan="2" style="font-size: 13px;padding: 5px;">SISTEMA/FASE</td>
  <td colspan="5" style="border: none"><b>SDG1M001</b></td>
</tr>
<tr>
  <td colspan="2" style="font-size: 13px;padding: 5px;">CLIENTE</td>
  <td colspan="5" style="border: none"><b>DETRAN</b></td>
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
  <td colspan="2" style="font-size: 13px;padding: 5px;">UNIDADE</td>
  <td colspan="5" style="border: none"><b>Setor de Inscrição - Edifício Gerais - 5º andar</b></td>
  <!-- <td style="font-size: 12px">REF.</td>
  <td colspan="2" style="text-align: center">'.$sdg1['referencia'].'</td> -->
</tr> 

<tr>

  <td colspan="4" style="text-align: center; background-color: #DEDCDC"><b>Descrição</b></td>
  <td colspan="1" style="text-align: center;padding: 5px; background-color: #DEDCDC"><b>Cópias</b></td>
  <td colspan="1" style="text-align: center;padding: 5px; background-color: #DEDCDC"><b>Páginas</b></td>
  <td colspan="1" style="text-align: center; background-color: #DEDCDC"><b>Total</b></td>
  <td colspan="1" style="text-align: center;padding: 5px; background-color: #DEDCDC"><b>Capas</b></td>
  <td colspan="4" style="text-align: center;padding: 5px; background-color: #DEDCDC"><b>JOB</b></td>
</tr>
<tr>
  <td colspan="4" style="text-align: center">Exclusão de Pendências</td>
  <td colspan="1" style="text-align: center;padding: 3px;font-size: 16px">'.$sdg1['copias'].'</td>
  <td colspan="1" style="text-align: center;font-size: 15px">'.$sdg1['paginas'].'</td>
  <td colspan="1" style="text-align: center;font-size: 15px">'.$sdg1['total'].'</td>
  <td colspan="1" style="text-align: center;font-size: 15px">'.$sdg1['capa'].'</td>
  <td colspan="4" style="text-align: center;font-size: 15px">'.$sdg1['job'].'</td>
</tr>
<tr>
<td colspan="6" style="text-align: center; background-color: #DEDCDC"><b>TOTAL:</b></td>
<td colspan="1" style="text-align: center;font-size: 15px;background-color: #DEDCDC"><b>'.$sdg1['total'].'</b></td>
<td colspan="1" style="text-align: center;font-size: 15px;background-color: #DEDCDC"><b>'.$sdg1['capa'].'</b></td>
<td colspan="4" style="text-align: center; font-size: 15px;background-color: #DEDCDC"></td>
</tr>
<!-- <tr>
  <td colspan="3" style="text-align: center;padding: 3px;" bgcolor="#DEDCDC"><b></b></td>
  <td colspan="2" style="text-align: center" bgcolor="#DEDCDC"><b>TOTAL:&nbsp;</b></td>
  <td colspan="7" style="text-align: center" bgcolor="#DEDCDC"><b>'.$sdg1['total2'].'</b>
</tr> -->
<tr>
  <td colspan="12" style="text-align: center;padding: 7px;">
  <span style="font-weight:bold;font-size: 13px; "> RECLAMAÇÕES SERÃO ACEITAS ATÉ 05(CINCO) DIAS APÓS A ENTREGA DOS PRODUTOS<br>DECLARO TER CONFERIDO E RECEBIDO O DESCRITO ACIMA</span></td>
</tr>
<tr>
  <td colspan="3" style="text-align: center; padding: 5px;">PRODEMGE</td>
  <td colspan="9" style="text-align: center">CLIENTE</td>
</tr>
<tr>
  <td colspan="1" style="text-align: center;padding: 5px;">Nome:</td>
  <td colspan="1" style="font-weight:bold;text-align: center;">'.$sdg1['funcionario'].'</td>
  <td colspan="1" style="text-align: center;">Data:</td>
  <td colspan="1" style="text-align: center;">Matrícula:</td>
  <td colspan="3"></td>
  <td colspan="5" style="text-align: center;">Data:</td>
</tr>
<tr>
  <td colspan="1" style="text-align: center; padding: 5px">Assinatura:</td>
  <td colspan="1"></td>
  <td colspan="1" style="text-align: center;">'.$sdg1['dataAtual'].'</td>
  <td colspan="1" style="text-align: center;">Nome Legível:</td>
  <td colspan="3"></td>
  <td colspan="5"></td>
</tr>
</table>
<span style="font-size: 10px;"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;SITE: http://www.prodemge.mg.gov.br&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;E-MAIL: atendimento@prodemge.gov.br &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PRIMEIRA VIA - CLIENTE&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;SEGUNDA VIA - GIM    </span>

	</div>
  </body>'; 
// pega o conteudo do buffer, insere na variavel e limpa a memória
ob_end_clean();

$mpdf->allow_charset_conversion=true;

$mpdf->WriteHTML($html);

$mpdf->Output('SDG1M001.pdf',\Mpdf\Output\Destination::INLINE);
// imprime  \Mpdf\Output\Destination::DOWNLOAD

exit();
// finaliza o codigo
?>
$html = '
TESTANDO 123 TESTANDO
';

// pega o conteudo do buffer, insere na variavel e limpa a memória
ob_end_clean();
$mpdf->allow_charset_conversion = true;
$mpdf->WriteHTML($html);
$mpdf->Output('Sdake64.pdf', \Mpdf\Output\Destination::INLINE);
// imprime  \Mpdf\Output\Destination::DOWNLOAD
return $response;
exit();
// finaliza o codigo
