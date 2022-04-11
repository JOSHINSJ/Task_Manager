<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="purchase.php" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="contact.php" class="nav-link">Contact</a>
      </li>
    </ul>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Brad Diesel
                  <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Call me whenever you can...</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  John Pierce
                  <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">I got your message bro</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Nora Silvester
                  <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">The subject goes here</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
      </li>
      <?php
      //select count FROM DATABASE
                    $con=mysqli_connect("localhost","root","","task_manager1");
                    if($con)
                          {
                            

                          }
                          
                        ?>
                        <?php
        $sql="SELECT count(`req_no`) FROM tm_pa_request WHERE status=0";
        $sqli="SELECT `v_name`,`product_name`, `department` FROM `tm_pa_request` WHERE 1";
          $abc=mysqli_query($con,$sql);
          $cba=mysqli_query($con,$sqli);
          $result=mysqli_fetch_array($abc);
          while ($resi=mysqli_fetch_assoc($cba)) {
                     $a="".$resi['product_name']."";

}
?>
<?php

           $sqi="SELECT count(`id`) FROM tm_pa_stock WHERE status=0";
          $abd=mysqli_query($con,$sqi);
          $res=mysqli_fetch_array($abd);
          
          $total = $res[0] + $result[0];

      ?>
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge"><?php echo $total;?></span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
           <span class="dropdown-item dropdown-header"><?php echo $total;?> Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="index.php" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> <?php echo $result[0]; ?> New Request
            <span class="float-right text-muted text-sm"></span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i>  <?php echo $res[0]; ?> New Stock Details
            <span class="float-right text-muted text-sm"></span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="cardsupplier.php" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 Suppliers
            <span class="float-right text-muted text-sm"></span>
          </a>
         
    
     <!--  <li class="nav-item dropdown">
         
       <li class="fa fa-sign-out" style="font-size:48px;color:red">
           <a class="dropdown-toggle" data-toggle="dropdown" href="#">
           <span class="badge badge-warning navbar-badge count"></span>
        </a></li>
       -->
         
          &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;

     <li class="nav-item">
        <a href="logout.php">
        <i class="fa fa-sign-out" aria-hidden="true">logout</i>
          <span class="badge badge-warning navbar-badge"></span>
        </a>
      </li>
  </nav>
  <!-- /.navbar -->


      



  <!-- /.navbar -->

  <?php include "fetch.php"; ?>
  <script>
    $(document).ready(function(){
      function load_unseen_notification(view = '')
      {
        
        $.ajax({
        url:"fetch.php",
        method:"POST",
        data:{view:view},
        dataType:"json",
        success:function(data)
        {
          $('#notify').html(data.notification);
          if(data.unseen_notification > 0)
          {
            $('.count').html(data.unseen_notification);
          }
        }
        });

      }
    load_unseen_notification();

      $(document).on('click', '.dropdown-toggle', function(){
      $('.count').html('');
      load_unseen_notification('yes');
      });
    setInterval(function(){
    load_unseen_notification();;
    }, 5000);
    });
</script>

