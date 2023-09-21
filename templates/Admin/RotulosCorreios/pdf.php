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
  <table border="1" style="border-collapse: collapse; width: 300px; height: 700px;">
    <tr>
      <td colspan="4" style="border-bottom: none;"><img src="../webroot/img/correios.jpg" width="40px"></td>
      <td rowspan="5" style="text-align: center;"><b>B<p>H</p><p>E</p></b></td>
      <td rowspan="5" style="text-align: center; background-color: #FFFF00;"><b>P<p>O</p><p>S</p><p>T</p><p>A</p><p>L</p></b></td>
    </tr>
    <tr>
      <td colspan="4" style="border-top: none;">Destino<p><b>CEP:</b></p></td>
    </tr>
    <tr>
      <td colspan="4">Serviço: <b>' . $rotulosCorreio['servico'] . '</b></td>
    </tr>
    <tr>
      <td colspan="2">Selo Plástico<p> <br><br> </p></th>
      <td colspan="2">Peso(kg)<p> <br><br> </p></td>
    </tr>
    <tr>
      <td colspan="2"><b style="font-size: 10px;">ORIGEM</b><p>PRODEMGE</p></th>
      <td colspan="2"><b style="font-size: 10px;">ESPECIE</b><p><b>' . $rotulosCorreio['especie'] . '</b></p></td>
    </tr>
  </table><br><br>
';
// pega o conteudo do buffer, insere na variavel e limpa a memória
ob_end_clean();

$mpdf->allow_charset_conversion = true;
$mpdf->SetColumns(2);
// duplicar o pdf
$mpdf->WriteHTML($html);

for ($i = 0; $i < 7; $i++) {
  $mpdf->WriteHTML($html);
}

$mpdf->Output('Cd.pdf', \Mpdf\Output\Destination::INLINE);
// imprime  \Mpdf\Output\Destination::DOWNLOAD

return $response;

exit();
// finaliza o codigo