<?php include "db_connect.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
    <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script> 

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

    <script type="text/javascript">
        google.charts.load('current', {packages: ['corechart', 'bar']});
        google.charts.setOnLoadCallback();

        function load_supplierwise_data(title)
        {
            var supplier=document.getElementById('supplier').value;
            var temp_title = title + ''+supplier+'';
            $.ajax({
                url:"po_productwise.php?request_supplier",
                method:"POST",
                data:{supplier:supplier},
                dataType:"JSON",
                success:function(data)
                {
                   drawChart(data, temp_title);         
                }
            });
        }

        function drawChart(chart_data, chart_title)
       {
            var jsonData = chart_data;
            var data = new google.visualization.DataTable();
            data.addColumn('string', 'date');
            data.addColumn('number', 'count');
            var dataArray = [];
            $.each(jsonData, function(i,jsonData) {
                    var date = jsonData.date;
                    var count = parseInt(jsonData.count);
                    data.addRows([[date, count]]);
                });
            
            var options = {
                title: chart_title,
                hAxis: {
                    title: "Date"
                },
                vAxis: {
                    title: "Orders"
                },
                curveType: 'function',
                legend: { position: 'bottom' }
            };
            var chart = new google.visualization.ColumnChart(document.getElementById('chart_area'));
            chart.draw(data, options);
      }
    </script>
<!-- Datewise   -->
<script type="text/javascript">
        google.charts.load('current', {packages: ['corechart', 'bar']});
        google.charts.setOnLoadCallback();

        function load_datewise_data(e)
        {
            var start_date=document.getElementById('start_date').value;
            var supplier=document.getElementById('supplier').value;
            var end_date=(e.target.value);
            var temp_title = "Date wise Orders : Supplier:- "+''+supplier+'';
            $.ajax({
                url:"po_datewise.php?request_date",
                method:"POST",
                data:{
                    start_date:start_date,
                    end_date:end_date,
                    supplier:supplier
                },
                dataType:"JSON",
                success:function(data)
                {
                   drawChart3(data, temp_title);         
                }
            });
        }

        function drawChart3(chart_data, chart_title)
       {
            var jsonData = chart_data;
            var data = new google.visualization.DataTable();
            data.addColumn('string', 'date');
            data.addColumn('number', 'count');
            var dataArray = [];
            $.each(jsonData, function(i,jsonData) {
                    var date = jsonData.date;
                    var count = parseInt(jsonData.count);
                    data.addRows([[date, count]]);
                });
            
            var options = {
                title: chart_title,
                hAxis: {
                    title: "Date"
                },
                vAxis: {
                    title: "Orders"
                },
                curveType: 'function',
                legend: { position: 'bottom' }
            };
            var chart = new google.visualization.ColumnChart(document.getElementById('chart_area'));
            chart.draw(data, options);
      }
    </script>
    
    <script>
    	$(document).ready(function() {

            $.ajax({
                url : "po_current_month.php",
                dataType : "JSON",
                success : function(data) {
                    google.charts.load('current', {
                        'packages' : [ 'corechart' ]
                    });
                    google.charts.setOnLoadCallback(function() {
                        drawChart2(data);
                    });
                }
            });

            function drawChart2(pur_data)
            {
                    var jsonData = pur_data;
                    var data = new google.visualization.DataTable();
                    data.addColumn('string', 'date');
                    data.addColumn('number', 'count');
                    var dataArray = [];
                    $.each(jsonData, function(i,jsonData) {
                            var date = jsonData.date;
                            var count = parseInt(jsonData.count);
                            data.addRows([[date, count]]);
                        });
                    
                    var options = {
                        title: "Overall Order Accepted Chart",
                        hAxis: {
                            title: "Date"
                        },
                        vAxis: {
                            title: "Orders"
                        },
                        curveType: 'function',
                        legend: { position: 'bottom' }
                    };
                    var chart1 = new google.visualization.ColumnChart(document.getElementById('chart_area'));
                    chart1.draw(data, options);
            }
        });
    </script>
    
  </head>
  
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
    <div class="wrapper">
    
    <!-- options for select tag -->
    <?php
        $query = "SELECT DISTINCT `Supplier` FROM `tm_pa_purchase_order` ORDER BY `Supplier` ASC";
        $res2 = mysqli_query($con,$query);
        $options = "";
        while($row2 = mysqli_fetch_assoc($res2))
        {
             
            $options = $options."<option value=".$row2['Supplier'].">".$row2['Supplier']."</option>";
                // $options = $options."<option value=".$row2[0].">$row2[0]</option>";    
        }   
        
    ?>
    <!-- <label for="supplier">Select supplier:</label> -->
    <div id="autosavesupplier"></div>
    <div>
        <label>Supplier: </label>
        <select  style="width:150px;" id="supplier" onchange="load_supplierwise_data('Supplierwise Orders :- ');">
          <option value="All">All</option>
          <?php echo $options; ?>
        </select>
        &nbsp &nbsp &nbsp &nbsp
        <label>From:</label>&nbsp
        <input type="date" id="start_date"/>&nbsp &nbsp
        <label>To:</label>
        <input type="date" id="end_date" onchange="load_datewise_data(event);"/>
        </div>
        <div id="chart_area" style="width: 1065px; height: 500px;"></div>   
    </div> 
</body>
</html>
