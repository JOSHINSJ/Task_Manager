<?php include "db_connect.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
 <!-- Font Awesome Icons -->
 <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">


    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
    <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script> 

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

    <script type="text/javascript">
        google.charts.load('current', {packages: ['corechart', 'bar']});
        google.charts.setOnLoadCallback();

        function load_productwise_data(product, title)
        {
            var temp_title = title + ' '+product+'';
            $.ajax({
                url:"productwise_oa.php",
                method:"POST",
                data:{product:product},
                dataType:"JSON",
                success:function(data)
                {
                   drawChart(data, temp_title);         
                }
            });
        }

        // function load_data()
        // {
        //     $.ajax({
        //         url:"pdata.php",
        //         method:"POST",
        //         dataType:"JSON",
        //         success:function(data)
        //         {
        //            drawChart2(data);         
        //         }
        //     });

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
                    title: "Products"
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
                url : "current_month_oa.php",
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
                    var chart1 = new google.vi sualization.ColumnChart(document.getElementById('chart_area'));
                    chart1.draw(data, options);
            }
        });
    </script>

    <script>
    $(document).ready(function() {
        $('#product').change(function(){
            var product = $(this).val();
            if(product != '')
            {
                load_productwise_data(product, 'Productwise Orders :-');
            }    
        });
    });
    </script> 

  </head>
  
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
    <div class="wrapper">
    
    <!-- options for select tag -->
    <?php
        $query = "SELECT DISTINCT `product_name` FROM `tm_sa_order_acceptance` ORDER BY `product_name` ASC
        ";
        $res2 = mysqli_query($con,$query);
        $options = "";
        while($row2 = mysqli_fetch_assoc($res2))
        {
             
            $options = $options."<option value=".$row2['product_name'].">".$row2['product_name']."</option>";
                // $options = $options."<option value=".$row2[0].">$row2[0]</option>";    
        }   
        
    ?>
    <!-- <label for="product">Select product:</label> -->
        <div id="autosaveproduct"></div>
        <select class="form-control selcls" style="width:200px;" id="product">
          <option value="">--SELECT product--</option>
          <?php echo $options; ?>
        </select>
        
        <br/>
        <br/>

    
        <div id="chart_area" style="width: 1000px; height: 620px;"></div>
    <br/>    
    </div> 
    
    
<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>

<!-- OPTIONAL SCRIPTS -->
<script src="dist/js/demo.js"></script>

<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
<script src="plugins/raphael/raphael.min.js"></script>
<script src="plugins/jquery-mapael/jquery.mapael.min.js"></script>
<script src="plugins/jquery-mapael/maps/usa_states.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>

<!-- PAGE SCRIPTS -->
<script src="dist/js/pages/dashboard2.js"></script>

</body>
</html>
