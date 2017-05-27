<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
    google.charts.load('current', {'packages': ['geochart']});
    google.charts.setOnLoadCallback(drawMarkersMap);

    function drawMarkersMap() {
        var data = google.visualization.arrayToDataTable([
            ['Mesto', 'pocet'],
            <?php
            foreach ($odchod as $odchod) {
                echo "[ '$odchod->Mesto', $odchod->pocet],";
            }
            ?>

        ]);

        var options = {
            region: 'SK',
            displayMode: 'markers',
            colorAxis: {colors: ['green', 'blue']}
        };
        var chart = new google.visualization.GeoChart(document.getElementById('chart_div'));
        chart.draw(data, options);
    }
</script>

<br><br>
<center>
    <h3>Frekvencia miest odchodu</h3><br><br>
    <div id="chart_div" style="width: 900px; height: 500px;"></div>
