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
    <table width="100%" style="border-collapse: collapse;">
        <thead>
            <tr>
                <th style="background-color: #27333F; color: #FFF; padding: 8px;" colspan="6">
                    <img src="https://www.geo.prodemge.gov.br/assets/images/logo.png" height="27" width="138"><br><br><b>ATA DE REUNIÃO</b><br><br>COMPANHIA DE TECNOLOGIA DA INFORMAÇÃO DO ESTADO DE MINAS GERAIS<br>          RUA DA BAHIA, 2277 - Lourdes - Belo Horizonte - MG - CEP: 30.160-012<br><br>
                </th>
            </tr>
        </thead>
    </table><br><br>

    <table border="1" width="100%" style="border-collapse: collapse; ">
        <thead>
            <tr>
                <th style="background-color: #27333F; color: #FFF; padding: 8px;">Tema principal</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td style="text-align: center;">' . $reunioes['tema_abordado'] . '</td>
            </tr>
        </tbody>
    </table><br>

    <table border="1" width="100%" style="border-collapse: collapse; ">
        <thead>
            <tr>
                <th style="background-color: #27333F; color: #FFF; padding: 8px;">Local da reunião</th>
                <th style="background-color: #27333F; color: #FFF; padding: 8px;">Data</th>
                <th style="background-color: #27333F; color: #FFF; padding: 8px;">Horário</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td style="text-align: center;">' . $reunioes['local_reuniao'] . '</td>
                <td style="text-align: center;">' . $reunioes['data_reuniao'] . '</td>
                <td style="text-align: center;">' . $reunioes['horario_reuniao']->format('H:i') . '</td>
            </tr>
        </tbody>
    </table><br>

    <table border="1" width="100%" style="border-collapse: collapse; ">        
        <thead>
            <tr>
                <th style="background-color: #27333F; color: #FFF; padding: 8px;">Pauta</th>
                <th style="background-color: #27333F; color: #FFF; padding: 8px;">Responsáveis</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td style="text-align: center;">' . $reunioes['pauta'] . '</td>
                <td style="text-align: center;">' . $reunioes['responsavel'] . '</td>
            </tr>
        </tbody>
    </table><br>

    <table border="1" width="100%" style="border-collapse: collapse; ">
        <thead>
            <tr>
                <th style="background-color: #27333F; color: #FFF; padding: 8px;">Participantes</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td style="text-align: center;">' . $reunioes['participantes'] . '</td>
            </tr>
        </tbody>
    </table><br><br>   
    
    <table border="1" width="100%" style="border-collapse: collapse; ">
        <thead>
            <tr>
                <th style="background-color: #27333F; color: #FFF; padding: 8px;">Súmula</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td style="height: 400px; vertical-align: text-top;">' . $reunioes['sumula'] . '</td>
            </tr>
        </tbody>
    </table>
</body>';
// pega o conteudo do buffer, insere na variavel e limpa a memória
ob_end_clean();

$mpdf->allow_charset_conversion = true;

$mpdf->WriteHTML($html);

$pdfContent = $mpdf->Output('', \Mpdf\Output\Destination::STRING_RETURN);

$response = $response->withStringBody($pdfContent);

return $response;

// $mpdf->Output('Ata_de_reuniao.pdf', \Mpdf\Output\Destination::INLINE);
// imprime  \Mpdf\Output\Destination::DOWNLOAD

exit();
// finaliza o codigo

?>
