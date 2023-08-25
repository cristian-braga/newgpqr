<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
var data = new Date();
var anoAtual = String(data.getFullYear());
var anoPass = String(data.getFullYear() - 1);
var anoRet = String(data.getFullYear() - 2);

google.charts.load('current', {
    'packages': ['bar']
});
google.charts.setOnLoadCallback(drawChart);

function drawChart() {
    
    var data2 = google.visualization.arrayToDataTable([
        ['', anoRet, anoPass, anoAtual],
        <?php foreach ($relatorioMultas as $multas) : ?>['<?php echo $multas['mes_atual'] ?>',
            '<?php echo $multas['ano_retrasado'] ?>', '<?php echo $multas['ano_passado'] ?>',
            '<?php echo $multas['ano_atual'] ?>'],
        <?php endforeach; ?>
    ]);

    var options2 = {
        chart: {
            title: 'Quantitativo de Multas - Mensal',
            subtitle: '',
        },
        bar: {
            groupWidth: "60%"
        },
        colors: ['#AFABAB', '#27333F', '#8C2A1F']
    };
    
    var chart = new google.charts.Bar(document.getElementById('columnchart_material'));
    chart.draw(data2, google.charts.Bar.convertOptions(options2));
}
</script>

<div class="container">
    <h2 class="text-gpqr mt-2 mb-4">Relatórios Multas</h2>
    <div id="columnchart_material" style="width: 1000px; height: 250px; border: solid black 1px;"></div><br><br>
    <div class="table-reponsive">
        <?php $dataAno = date('Y');
        $dataAno1 = date('Y', strtotime('-1 year'));
        $dataAno2 = date('Y', strtotime('-2 year'));
        $dataAno3 = date('Y', strtotime('-3 year'));
        ?>
        <table class="table table-borderless table-bordered  table-hover table-striped text-center align-middle"
            style="width: 1000px;">
            <tr>
                <th>Serviço</th>
                <th><?php echo $dataAno2 ?></th>
                <th><?php echo $dataAno1 ?></th>
                <th><?php echo $dataAno ?></th>
            </tr>
            <?php foreach ($relatorioMultas as $multas) : ?>
            <tr>
                <td><?= h($multas['mes_atual']) ?></td>
                <td><?= $this->Number->format($multas['ano_retrasado']) ?></td>
                <td><?= $this->Number->format($multas['ano_passado']) ?></td>
                <td><?= $this->Number->format($multas['ano_atual']) ?></td>
            </tr>
            <?php endforeach; ?>
        </table>
    </div>
</div>