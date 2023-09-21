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
      <td colspan="3"><b>DATA POSTAGEM:&nbsp;&nbsp; ______/______/ ' . $rotulosCorreios['ano'] . '</b></td>
    </tr>
    <tr>
      <td colspan="3"><b>CEP INICIAL: ' . $rotulosCorreios['cep_inicial'] . '</b></td>
    </tr>
    <tr>
      <td colspan="3"><b>CEP FINAL: ' . $rotulosCorreios['cep_final'] . '</b></td>
    </tr>
    <tr>
      <td colspan="3"><b>DESTINO: ' . $rotulosCorreios['destino'] . '</b></td>
    </tr>
    <tr>
      <td colspan="3" style="background-color: #D0D1D3; height: 45px;"><b>TIPO OBJETO LC</b></td>
    </tr>
    <tr>
      <td colspan="2" style="text-align: center;"><img src="../webroot/img/logo_prodemge.png" style="width: 139px;"></td>
      <td style="text-align: center;">________/________</td>
    </tr>
  </table>';

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