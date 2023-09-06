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
