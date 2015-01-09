<html>
<head>
<?php 

$this->load->helper('url');

?>
<head>
  <meta charset="utf-8">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="mobile-web-app-capable" content="yes">
  
  <title>Login</title>  
  <link  href="http://fonts.googleapis.com/css?family=Cabin:400,500,600,bold" rel="stylesheet" type="text/css" >
  <link href="http://localhost/lakshyaci/assets/css/bootstrap.css" rel="stylesheet">
  <link href="http://localhost/lakshyaci/assets/css/font-awesome.min.css" rel="stylesheet">
  <link  href="http://fonts.googleapis.com/css?family=PT+Sans+Narrow:regular,bold" rel="stylesheet" type="text/css" >
 
   
  <link rel="stylesheet" href="http://localhost/lakshyaci/styles/app.css"/>
  <link rel="stylesheet" href="http://localhost/lakshyaci/css/main.css"/>
  <script src="lib/onsen/js/angular/angular.js"></script>    
  <script src="lib/onsen/js/onsenui.js"></script>   
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> 
   <!-- BootstrapValidator CSS -->
  <link rel="stylesheet" href="//cdn.jsdelivr.net/jquery.bootstrapvalidator/0.5.3/css/bootstrapValidator.min.css"/>
  <!-- BootstrapValidator JS -->
  <script type="text/javascript" src="//cdn.jsdelivr.net/jquery.bootstrapvalidator/0.5.3/js/bootstrapValidator.min.js"></script>

  <script src="http://localhost/lakshyaci/cordova.js"></script>
  <script src="http://localhost/lakshyaci/app.js"></script> 
  <script type="text/javascript">
function submitFormWithValue(){
  document.forms["login"].submit();
}
</script>
<script>
$(document).ready(function() {
    $('.login_form').bootstrapValidator({
        // To use feedback icons, ensure that you use Bootstrap v3.1.0 or later
        fields: {
           email: {
                validators: {
                    notEmpty: {
                        message: 'The email address is required and cannot be empty'
                    },
                    emailAddress: {
                        message: 'The email address is not a valid'
                    }
                }
            },
            rollno: {
                validators: {
                    notEmpty: {
                        message: 'The rollno is required and cannot be empty'
                    }
                }
            },

          }
    });
});
</script>
  
  
</head>


<body background="<?php base_url() ?>http://localhost/lakshyaci/img/Drag Layer.png")?>
   

  <div id="spacer" style="padding-top:100px">
  </div>
  <div id="icon" align="center" style=" padding-top:200px;"><img src="http://localhost/lakshyaci/img/car icon2.png")?>
  </div>
  <div class="container" id="loginform" style="display:none">
    <div class="row">
    <div class="col-md-4 col-md-offset-4">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title">Login</h3>
        </div>
          <div class="panel-body">
  <?php
  $dataform = array('class' => 'form-vertical login_form');
  echo form_open('',$dataform);
  echo "  <fieldset> <div class='form-group'>";
  echo form_label($login_form["email"]["label"], $login_form["email"]["field"]);
  $data = array('name' => $login_form["email"]["field"],
                 'class'=> "form-control",
                  'placeholder'=> "Email" );
  echo form_input($data);
  echo "<br><br>";
  
  echo form_label($login_form["rollno"]["label"], $login_form["rollno"]["field"]);
  $data['name']=$login_form["rollno"]["field"];
  $data['placeholder']="Rollno";
  echo form_password($data);
  echo "<br><br>";
  echo "</div>";
 $datasub= array(
                   'value' => "Login",
                    'class' => "btn btn-lg btn-success btn-block" );
 
  echo "</fieldset>";
   echo form_submit($datasub);
  echo form_close();
  ?>
  <br>
    <button type="button" class="btn btn-lg btn-warning btn-block" onclick="window.location.href='http://localhost/lakshyaci/login/register'">Register</button>
    </a>
  </div>
  </div>
  </div>
  </div>
  </div>
  
  
  <script>
    setTimeout(fade_out, 10000);
$("#icon").fadeIn(1000).fadeOut(1000).fadeIn(1000).fadeOut(1000).fadeIn(1000).fadeOut(1000).fadeIn(1000).fadeOut(1000).fadeIn(1000);
function fade_out() {
  $( "#icon" ).animate( { opacity: "0" }, { queue: false, duration: 1000 }).slideUp(1000);

  document.getElementById("loginform").style.display="block";
}


   </script>
    
</body>
</html>