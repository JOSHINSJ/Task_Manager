<!--<?php
$con=mysqli_connect("localhost","root","","task_manager1");
if($con)
{
  echo "connected";
}

?>  -->
<html>
  <head>
   
  </head>
  <body>
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);
      
      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['product_name', 'total_stock'],
   
         
       
        <?php
          // $s="SELECT cust_name FROM tm_sa_order_acceptance ORDER BY oa_no DESC";
          //  $t=mysqli_query($con,$s);  
          //  while ($r=mysqli_fetch_assoc($t)) {
          // $n=$r['cust_name'];
          //  $sql="SELECT *,COUNT(cust_name) AS no FROM tm_sa_order_acceptance Where cust_name='$n'";
           $sql="SELECT product_name, COUNT(*) AS total_stock FROM tm_pa_stock GROUP BY product_name HAVING COUNT(*) > 0";
          $task=mysqli_query($con,$sql);
          while ($result=mysqli_fetch_assoc($task)) {
          echo "['".$result['product_name']."',".$result['total_stock']."],";
        }
      
      
        ?>
  ]);


        var options = {
          title: 'Stock Summary'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }

    </script>


    </script>
    <div id="piechart" style="width: 1065px; height: 500px;"></div>
  </body>
</html>

