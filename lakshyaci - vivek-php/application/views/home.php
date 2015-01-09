<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="http://localhost/lakshyaci/assets/ico/favicon.png">

   

    <!-- Bootstrap core CSS -->
    <link href="http://localhost/lakshyaci/assets/css/bootstrap.css" rel="stylesheet">
    <link href="http://localhost/lakshyaci/assets/css/font-awesome.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="http://localhost/lakshyaci/assets/css/main.css" rel="stylesheet">
    
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,300,700' rel='stylesheet' type='text/css'>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="assets/js/html5shiv.js"></script>
      <script src="assets/js/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>


    <div class="container">
      <div class="col-lg-6 col-lg-offset-3">
      
        <!-- ===== vCard Navigation ===== -->
        <div class="row w">
          <div class="col-md-4">
            <img class="img-responsive" src="http://localhost/lakshyaci/assets/img/avatar.jpg" alt="">
          <ul class="nav nav-tabs nav-stacked" id="myTab">
            <li class="active"><a href="#about">About</a></li>
           
          </ul>         
        </div><!-- col-md-4 -->

        <!-- ===== vCard Content ===== -->
          <div class="col-md-8">
            <div class="tab-content">
            
              <!-- ===== First Tab ===== -->
            <div class="tab-pane active" id="about">
              <h3><b><?php echo $name?></b></h3>
              <h5><?php echo $email?></h5>
              <hr>
              <p><b>College:</b> <?php echo $id?></p> 
              <p><b>Telno: </b><?php echo $telno?></p>
              <p>Welcome to NIT Warangal</p>
              <p class="pull-right red"><i class="icon-heart"></i></p>
              <p><a href="http://localhost/lakshyaci/login/logout" <span class="glyphicon glyphicon-off"></span></a> Logout </p>
            </div><!-- tab about -->
            
            
          </div><!-- col-md-8 -->
        </div><!-- row w -->
      </div><!-- col-lg-6 -->
    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="http://localhost/lakshyaci/assets/js/jquery.js"></script>
    <script src="http://localhost/lakshyaci/assets/js/bootstrap.min.js"></script>
  <script>
  $('#myTab a').click(function (e) {
    e.preventDefault()
    $(this).tab('show')
  })  
  </script>    
    
  </body>
</html>
