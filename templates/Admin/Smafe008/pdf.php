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
<title>SMAFE008</title>
</head
<body style="font-family: Helvetica">
  <table border="1" width="100%">
<tr>
  <th colspan="2"><img src="../webroot/img/logo_prodemge.png" width="100px"></th>
  <th colspan="8" style="text-align: center;padding: 3px;background-color: #DEDCDC">REMESSA DE SERVIÇO</th>
</tr>
<tr>
  <td colspan="10" style="font-size: 13px;text-align: center;padding: 8px;">COMPANHIA DE TECNOLOGIA DA INFORMAÇÃO DO ESTADO DE MINAS GERAIS<br>          Rua da Bahia, 2277 - Savassi - Belo Horizonte - MG - CEP: 30.160-019<br>                                                 TEL:(31) 3339-1600 - Expedição de Serviços: 3339-1142</td>
</tr>
<tr>
  <td colspan="2" style="font-size: 10px;padding: 5px;">SISTEMA/FASE</td>
  <td colspan="5" style="border: none"><b>SMAFE008</b></td>
  <td style="font-size: 10px">CONCURSO</td>
  <td colspan="2" style="text-align: center; font-size: 14px"><b>'.$smafe008['concurso'].'</b></td>
</tr>
<tr>
  <td colspan="2" style="font-size: 10px;padding: 5px;">CLIENTE</td>
  <td colspan="5" style="border: none"><b>PMMG</b></td>
  <td style="font-size: 10px">TELEFONE</td>
  <td colspan="2" style="text-align: center; font-size: 14px">2123-9504</td>
</tr>
<tr>
  <td colspan="2" style="font-size: 10px;padding: 5px;">LOCAL DE ENTREGA</td>
  <td colspan="5" style="border: none"><b>Recursos Humanos - Concursos</b></td>
  <td style="font-size: 10px">REMESSA</td>
  <td colspan="2" style="text-align: center;font-size: 14px">ON-LINE</td>
</tr>
<tr>
  <td colspan="2" style="font-size: 10px;padding: 5px;">ENTREGAR A</td>
  <td colspan="5" style="border: none"><b>Sgt. Mendes</b></td>
  <td style="font-size: 10px">REF.</td>
  <td colspan="2" style="text-align: center;font-size: 14px">'.$smafe008['referencia'].'</td>
</tr>
<tr style="background-color: #DEDCDC;">
  <td colspan="6" style="text-align: center"><b>Descrição</b></td>
  <td style="text-align: center"><b>Copias</b></td>
  <td style="text-align: center"><b>Páginas</b></td>
  <td style="text-align: center"><b>TOTAL</b></td>
  <td style="text-align: center"><b>JOB</b></td>
</tr>
<tr>
  <td colspan="6" style="font-size: 13px" style="text-align: center" >Folha para Controle de Presença</td>
  <td style="text-align: center">'.$smafe008['copias'].'</td>
  <td style="text-align: center">'.$smafe008['paginas'].'</td>
  <td style="text-align: center" bgcolor="#DEDCDC"><b>'.$smafe008['total'].'</b></td>
  <td style="text-align: center">'.$smafe008['job'].'</td>
</tr>
  <tr>
  <td colspan="6" style="font-size: 13px" style="text-align: center" >Ata de Abertura e Fechamento</td>
  <td style="text-align: center">'.$smafe008['copias1'].'</td>
  <td style="text-align: center">'.$smafe008['paginas1'].'</td>
  <td style="text-align: center" bgcolor="#DEDCDC"><b>'.$smafe008['total1'].'</b></td>
  <td style="text-align: center">'.$smafe008['job'].'</td>
</tr>
  <tr>
  <td colspan="8" bgcolor="#DEDCDC"></td>  
  <td style="text-align: center" bgcolor="#DEDCDC"><b>'.$smafe008['totaltudo'].'</b></td>
  <td colspan="1" bgcolor="#DEDCDC"></td>
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
  // <td colspan="2" style="font-weight:bold;text-align: center;">'.$smafe008['funcionario'].'</td>
  <td colspan="1" style="text-align: center;">Data:</td>
  <td colspan="2" style="text-align: center;">Matrícula:</td>
  <td colspan="2"></td>
  <td colspan="1" style="text-align: center;">Data:</td>
</tr>
<tr>
  <td colspan="2" style="text-align: center; padding: 5px">Assinatura:</td>
  <td colspan="2"></td>
  <td colspan="1" style="text-align: center;">'.$smafe008['data'].'</td>
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

$mpdf->WriteHTML($html);

for ($i = 0; $i < 1; $i++) {
  $mpdf->WriteHTML($html);
}


$mpdf->Output('Saalm.pdf', \Mpdf\Output\Destination::INLINE);
// imprime  \Mpdf\Output\Destination::DOWNLOAD

return $response;

exit();
// finaliza o codigo