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

    <!--Load the AJAX API-->
    <script type="text/javascript" src="https://www.google.com/jsapi"></script>
    <script type="text/javascript">
        google.load('visualization', '1.0', {'packages':['corechart']});
        google.setOnLoadCallback(drawChart);

        function drawChart() {

            var data = new google.visualization.DataTable();
            data.addColumn('string', 'Rep');
            data.addColumn('number', 'Assigned Leads');
            data.addRows([
            <?php echo $url; ?> ;
        ]);

            // Set chart options
            var options = {'title':'How Many children in each Frindly Space',
                'width':600,
                'height':500};

            // Instantiate and draw our chart, passing in some options.
            var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
            chart.draw(data, options);
        }
    </script>
