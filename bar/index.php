<?php
    include "../Template1Cal.php";
    include "../Template2Cal.php";
    include "../Template3Cal.php";
    include "../Template4Cal.php";
    include "../Template5Cal.php";
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Page Title</title>
    <link
        href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic'
        rel='stylesheet' type='text/css'/>
    <!--<link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.css">-->
    <link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load('current', {'packages': ['bar']});
        google.charts.setOnLoadCallback(drawChart);
        function drawChart() {
            var data = google.visualization.arrayToDataTable([
                ['Template', 'Unread', 'Open', 'Replied'],
                ['Template 1', <?php echo $Unread1 ;?>, <?php echo $Read1 ;?>, <?php echo $Replied1 ;?>],
                ['Template 2', <?php echo $Unread2 ;?>, <?php echo $Read2 ;?>, <?php echo $Replied2 ;?>],
                ['Template 3', <?php echo $Unread3 ;?>, <?php echo $Read3 ;?>, <?php echo $Replied3 ;?>],
                ['Template 4', <?php echo $Unread4 ;?>, <?php echo $Read4 ;?>, <?php echo $Replied4 ;?>],
                ['Template 5', <?php echo $Unread5 ;?>, <?php echo $Read5 ;?>, <?php echo $Replied5 ;?>]
            ]);

            var options = {
                chart: {
                    title: 'Template Statistic',
                    subtitle: 'Sales, Expenses, and Profit: 2014-2017',
                }
            };

            var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

            chart.draw(data, options);
        }
    </script>
</head>
<body>
<div class="container-fluid" style="padding-top:10px;">
    <br>
    <img class="img-responsive" alt="Brand" src="../img/DBSlogo.png" width="210px" height="125px">
    <br>
</div>
<div class="container-fluid" align="center">
    <div class="chart" id="columnchart_material" style="width: 1200px; height: 800px;"></div>
</div>
</body>
</html>