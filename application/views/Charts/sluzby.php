    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load('current', {'packages':['corechart']});
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
            var data = google.visualization.arrayToDataTable([
                ['Meno', 'Počet služieb'],
                <?php
                foreach ($sluzby as $sluzby) {
                    echo "[ '$sluzby->meno $sluzby->priezvisko', $sluzby->pocet],";
                }
                ?>

            ]);

            var options = {
                title: 'Počet služieb jednotlivých vodičov'
            };

            var chart = new google.visualization.PieChart(document.getElementById('piechart'));

            chart.draw(data, options);
        }
    </script>

    <br><br>
    <center>
        <h3>Počet služieb jednotlivých vodičov</h3><br><br>
        <div id="piechart" style="width: 900px; height: 500px;"></div></center>