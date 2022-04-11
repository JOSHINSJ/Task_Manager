<!-- <?php
$con=mysqli_connect("localhost","root","","task_manager");
if($con)
{
	echo "connected";    
}
?>   -->

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Featch Date</title>

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  
  </head>

  <body>
    
<form name="Filter" method="POST">
    From:
    <input type="date" name="dateFrom" value="<?php echo date('Y-m-d'); ?>" />
    <br/>
    To:
    <input type="date" name="dateTo" value="<?php echo date('Y-m-d'); ?>" />
    <input type="submit" name="submit" value="Submit"/>
</form>
<?php
$start_date = date('Y-m-d', strtotime($_POST['dateFrom']));
echo $start_date;
$end_date = date('Y-m-d', strtotime($_POST['dateTo']));
echo"</br>";
echo $end_date;
?>

<script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() 
      {
        var data = google.visualization.arrayToDataTable([
            ['date', 'Orders'],
         <?php
            $sql="SELECT *, COUNT(*) AS no  FROM tm_sa_order_acceptance WHERE date BETWEEN '$start_date' and '$end_date' GROUP BY date HAVING COUNT(*) > 0";
            $task=mysqli_query($con,$sql);
             while ($result=mysqli_fetch_assoc($task)) {
                 echo "['".date("d-m-Y", strtotime($result['date']))."',".$result['no']."],";
             } 
         ?>
            ]);
        var options = {
          title: 'Order Acceptance',
          curveType: 'function',
          legend: { position: 'bottom' }
        };
        var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));
        chart.draw(data, options);
      }
    </script>

<div id="curve_chart" style="width: 900px; height: 500px"></div>
 </body>
</html>