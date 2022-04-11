<?php
$con=mysqli_connect("localhost","root","","task_manager1");
if($con)
{
  echo "";
}

?>  

<html>
  <head>
<center>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
           ['product_name', 'total_stock'],

        <?php
           $sql="SELECT product_name, COUNT(*) AS total_stock FROM tm_pa_stock GROUP BY product_name HAVING COUNT(*) > 0";
          $task=mysqli_query($con,$sql);
          while ($result=mysqli_fetch_assoc($task)) {
          echo "['".$result['product_name']."',".$result['total_stock']."],";
        }
      
      
        ?>
  ]);

        var options = {
          title: 'Production Summarry',
          is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="piechart_3d" style="width: 900px; height: 500px;"></div>
  </body>
  </center>
</html>