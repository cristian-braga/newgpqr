<h2 class="text-center text-gpqr mt-2 mb-4">RELATÓRIO MULTAS</h2>

<div id="chart" class="table-gpqr mx-auto mb-5" style="width: 55%;"></div>

<div class="table-responsive table-gpqr mx-auto mb-5" style="width: 55%;">
    <table class="table table-hover text-center align-middle">
        <thead>
            <tr class="table-secondary">
                <th>Referência</th>
                <th><?= date('Y') - 2 ?></th>
                <th><?= date('Y') - 1 ?></th>
                <th><?= date('Y') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($relatorio_multas as $multas) : ?>
                <tr>
                    <td><b><?= h($multas['mes']) ?></b></td>
                    <td><?= $this->Number->format($multas['ano_retrasado']) ?></td>
                    <td><?= $this->Number->format($multas['ano_passado']) ?></td>
                    <td><?= $this->Number->format($multas['ano_atual']) ?></td>
                </tr>
            <?php endforeach; ?>
            <tr class="table-secondary">
                <th>Total</th>
                <th><?= $this->Number->format($ano_retrasado) ?></th>
                <th><?= $this->Number->format($ano_passado) ?></th>
                <th><?= $this->Number->format($ano_atual) ?></th>
            </tr>
        </tbody>
    </table>
</div>

<script>
    const dataAtual = new Date();
    const anoAtual = String(dataAtual.getFullYear());
    const anoPassado = String(anoAtual - 1);
    const anoRetrasado = String(anoAtual - 2);

    const dados = <?= json_encode($relatorio_multas) ?>;

    console.log(dados)

    google.charts.load('current', {
        'packages': ['corechart'],
        'language': 'pt-br'
    });

    google.charts.setOnLoadCallback(drawVisualization);

    function drawVisualization() {
        const data = new google.visualization.DataTable();
        data.addColumn('string', 'Month');
        data.addColumn('number', anoRetrasado);
        data.addColumn('number', anoPassado);
        data.addColumn('number', anoAtual);

        dados.forEach(function(novoDado) {
            data.addRows([
                [novoDado.mes, parseFloat(novoDado.ano_retrasado), parseFloat(novoDado.ano_passado), parseFloat(novoDado.ano_atual)]
            ]);
        });

        const options = {
            colors: ['#AFABAB', '#27333F', '#8C2A1F'],
            title: 'Quantitativo de Multas',
            vAxis: {
                title: '',
                groupingSymbol: '.',
            },
            hAxis: {
                title: '',
            },
            animation: {
                easing: 'inAndOut',
                duration: 800,
                startup: true,
            },
            backgroundColor: {
                stroke: '#27333F',
                strokeWidth: '2'
            },
            seriesType: 'bars',
            bar: {
                groupWidth: "75%"
            }
        };

        const chart = new google.visualization.ComboChart(document.getElementById('chart'));
        chart.draw(data, options);
    }
</script>