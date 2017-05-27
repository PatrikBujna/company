    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load('current', {'packages':['corechart']});
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
            var data = google.visualization.arrayToDataTable([
                ['Mesiac', 'Počet ciest'],
                <?php
                foreach ($cesty as $cesty) {
                    $monthNum  = $cesty->mesiac ;
                    $monthName = date('F', mktime(0, 0, 0, $monthNum, 10));
                    echo "[ '$monthName', $cesty->pocet],";
                }
                ?>

            ]);

            var options = {
                title: 'Počet ciest v jednotlivých mesiacoch'
            };

            var chart = new google.visualization.PieChart(document.getElementById('piechart'));

            chart.draw(data, options);
        }
    </script>

    <br><br>

    <center>
        <h3>Počet ciest v jednotlivých mesiacoch</h3><br><br>
        <div id="piechart" style="width: 900px; height: 500px;"></div></center>