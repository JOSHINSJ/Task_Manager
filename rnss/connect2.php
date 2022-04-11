<!--<?php
$con=mysqli_connect("localhost","root","","task_manager1");
if($con)
{
  echo "connected";
}

?>  -->
<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
           ['product_name', 'no'],

            <?php
                $sql="SELECT product_name, COUNT(product_name) AS no FROM tm_pa_stock GROUP BY product_name HAVING COUNT(*) > 0";
                $task=mysqli_query($con,$sql);
                while ($result=mysqli_fetch_assoc($task)) {
                echo "['".$result['product_name']."',".$result['no']."],";
                }
            ?>
        ]);

        var options = {
          chart: {
            title: 'Company Performance',
            subtitle: 'Sales, Expenses, and Profit: 2014-2017',
          },
          bars: 'horizontal' // Required for Material Bar Charts.
        };

        var chart = new google.charts.Bar(document.getElementById('barchart_material'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script>
  </head>
  <body>
    <div id="barchart_material" style="width: 900px; height: 500px;"></div>
  </body>
</html>