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
<!-- Addilional   -->
<script type="text/javascript">
        google.charts.load('current', {packages: ['corechart', 'bar']});
        google.charts.setOnLoadCallback();

        function load_datewise_data(e)
        {
            var start_date=document.getElementById('start_date').value;
            var end_date=(e.target.value);
            var temp_title = "Date wise Enquiry";
            $.ajax({
                url:"grn_datewise.php?request_date",
                method:"POST",
                data:{
                    start_date:start_date,
                    end_date:end_date,
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
                    title: "Enquires"
                },
                curveType: 'function',
                legend: { position: 'bottom' }
            };
            var chart = new google.visualization.LineChart(document.getElementById('chart_area'));
            chart.draw(data, options);
      }
    </script>
    
    <script>
    	$(document).ready(function() {

            $.ajax({
                url : "grn_current_month.php",
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
                        title: "Overall Enquiry Chart",
                        hAxis: {
                            title: "Date"
                        },
                        vAxis: {
                            title: "Enquires"
                        },
                        curveType: 'function',
                        legend: { position: 'bottom' }
                    };
                    var chart1 = new google.visualization.LineChart(document.getElementById('chart_area'));
                    chart1.draw(data, options);
            }
        });
    </script>
    
  </head>
  
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
    <div class="wrapper">
    
    <!-- <label for="product">Select product:</label> -->
    <div id="autosaveproduct"></div>
    <div>
        <h3>
        &nbsp &nbsp &nbsp &nbsp
        <label>From:</label>&nbsp
        <input type="date" id="start_date"/>&nbsp &nbsp
        <label>To:</label>
        <input type="date" id="end_date" onchange="load_datewise_data(event);"/></h3>
        </div>
        <div id="chart_area" style="width: 1000px; height: 620px;"></div>
    <br/>    
    </div> 
</body>
</html>
