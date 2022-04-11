<!-- <?php
$con=mysqli_connect("localhost","root","","task_manager1");
if($con)
{
	echo "connected";    
}
?>   -->

<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() 
      {
        var data = google.visualization.arrayToDataTable([
            ['date', 'Orders'],
         <?php
            $sql="SELECT *, COUNT(*) AS no  FROM tm_sa_order_acceptance  WHERE MONTH(date) = MONTH(CURRENT_DATE()) AND YEAR(date) = YEAR(CURRENT_DATE()) GROUP BY date HAVING COUNT(*) > 0";
            $task=mysqli_query($con,$sql);
             while ($result=mysqli_fetch_assoc($task)) {
                 echo "['".date("d-m-Y", strtotime($result['date']))."',".$result['no']."],";
             } 
         ?>
            ]);
        var options = {
          title: 'Company Performance',
          curveType: 'function',
          legend: { position: 'bottom' }
        };
        var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));
        chart.draw(data, options);
      }
    </script>
  </head>

  <body>
    <div id="curve_chart" style="width: 900px; height: 500px"></div>
  </body>
</html>


<!-- SELECT * FROM tm_sa_order_acceptance WHERE MONTH(date) = MONTH(CURRENT_DATE()) AND YEAR(date) = YEAR(CURRENT_DATE()) -->
<!-- select * from tm_sa_order_acceptance where DATE_FORMAT(date, "%m-%Y") = "03-2021" -->



