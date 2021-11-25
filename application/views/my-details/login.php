<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Login </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Play:400,700" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url('catalogs'); ?>/css/bootstrap.min.css">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url('catalogs'); ?>/css/font-awesome.min.css">
    <!-- owl.carousel CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url('catalogs'); ?>/css/owl.carousel.css">
    <link rel="stylesheet" href="<?php echo base_url('catalogs'); ?>/css/owl.theme.css">
    <link rel="stylesheet" href="<?php echo base_url('catalogs'); ?>/css/owl.transitions.css">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url('catalogs'); ?>/css/animate.css">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url('catalogs'); ?>/css/normalize.css">
    <!-- main CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url('catalogs'); ?>/css/main.css">
    <!-- morrisjs CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url('catalogs'); ?>/css/morrisjs/morris.css">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url('catalogs'); ?>/css/scrollbar/jquery.mCustomScrollbar.min.css">
    <!-- metisMenu CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url('catalogs'); ?>/css/metisMenu/metisMenu.min.css">
    <link rel="stylesheet" href="<?php echo base_url('catalogs'); ?>/css/metisMenu/metisMenu-vertical.css">
    <!-- calendar CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url('catalogs'); ?>/css/calendar/fullcalendar.min.css">
    <link rel="stylesheet" href="<?php echo base_url('catalogs'); ?>/css/calendar/fullcalendar.print.min.css">
    <!-- forms CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url('catalogs'); ?>/css/form/all-type-forms.css">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url('catalogs'); ?>/style.css">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url('catalogs'); ?>/css/responsive.css">
    <!-- modernizr JS
		============================================ -->
    <script src="<?php echo base_url('catalogs'); ?>/js/vendor/modernizr-2.8.3.min.js"></script>
	
	<style type="text/css">
	.login_logo{
	width:120px;  border-radius:50%; margin-bottom: -50px; position:relative; z-index:999;
	
	-webkit-box-shadow: 2px 54px 39px -14px rgba(0,0,0,0.65);
-moz-box-shadow: 2px 54px 39px -14px rgba(0,0,0,0.65);
box-shadow: 2px 54px 39px -14px rgba(0,0,0,0.65);
	}
	</style>
</head>

<body>
    <!--[if lt IE 8]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->
	<div class="error-pagewrap">
		<div class="error-page-int">
			<div class="text-center m-b-md custom-login">
			    <img class="login_logo" src="<?php echo base_url('catalogs'); ?>/img/logo.png" alt="" style="width:100px; height: 100px; border-radius:0px; box-shadow:none; margin-bottom:-113px;"/>
			</div>
			
			<div class="content-error">
				<div class="hpanel">
                    <div class="panel-body" style="padding-top:100px;">
					    <div class="text-center m-b-md custom-login">
				          <h3>Admin Login Section</h3>
				          
						  <?php echo @$message; ?>
			             </div>
                        <form action="" method="post">
                            <div class="form-group" id="valid_email">
                                <label for="email">Email</label>
                                <input type="text" class="form-control" id="email" name="email" placeholder="Enter">
                                <span style="color:red;display:none;">Field required</span>
                            </div>
                            <div class="form-group" id="valid_pass">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" id="password" name="password" placeholder="Enter">
                                <span style="color:red;display:none;">Field required</span>
                            </div>
                            <div class="form-group" id="valid_pass">
                                <button type="button" id="btn-form-submit" class="btn btn-success btn-block loginbtn">Login</button>
                                <input id="form-submit" style="visibility:hidden;" type="submit" name="submit" value="submit" />
							</div>
                        </form>
                    </div>
                </div>
			</div>
			<div class="text-center login-footer">
				<p>Copyright © 2019. All rights reserved </p>
			</div>
		</div>   
    </div>
    <!-- jquery
		============================================ -->
    <script src="<?php echo base_url('catalogs'); ?>/js/vendor/jquery-1.12.4.min.js"></script>
    <!-- bootstrap JS
		============================================ -->
    <script src="<?php echo base_url('catalogs'); ?>/js/bootstrap.min.js"></script>
    <!-- wow JS
		============================================ -->
    <script src="<?php echo base_url('catalogs'); ?>/js/wow.min.js"></script>
    <!-- price-slider JS
		============================================ -->
    <script src="<?php echo base_url('catalogs'); ?>/js/jquery-price-slider.js"></script>
    <!-- meanmenu JS
		============================================ -->
    <script src="<?php echo base_url('catalogs'); ?>/js/jquery.meanmenu.js"></script>
    <!-- owl.carousel JS
		============================================ -->
    <script src="<?php echo base_url('catalogs'); ?>/js/owl.carousel.min.js"></script>
    <!-- sticky JS
		============================================ -->
    <script src="<?php echo base_url('catalogs'); ?>/js/jquery.sticky.js"></script>
    <!-- scrollUp JS
		============================================ -->
    <script src="<?php echo base_url('catalogs'); ?>/js/jquery.scrollUp.min.js"></script>
    <!-- mCustomScrollbar JS
		============================================ -->
    <script src="<?php echo base_url('catalogs'); ?>/js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="<?php echo base_url('catalogs'); ?>/js/scrollbar/mCustomScrollbar-active.js"></script>
    <!-- metisMenu JS
		============================================ -->
    <script src="<?php echo base_url('catalogs'); ?>/js/metisMenu/metisMenu.min.js"></script>
    <script src="<?php echo base_url('catalogs'); ?>/js/metisMenu/metisMenu-active.js"></script>
    <!-- tab JS
		============================================ -->
    <script src="<?php echo base_url('catalogs'); ?>/js/tab.js"></script>
    <!-- icheck JS
		============================================ -->
    <script src="<?php echo base_url('catalogs'); ?>/js/icheck/icheck.min.js"></script>
    <script src="<?php echo base_url('catalogs'); ?>/js/icheck/icheck-active.js"></script>
    <!-- plugins JS
		============================================ -->
    <script src="<?php echo base_url('catalogs'); ?>/js/plugins.js"></script>
    <!-- main JS
		============================================ -->
    <script src="<?php echo base_url('catalogs'); ?>/js/main.js"></script>
    <!-- tawk chat JS
		============================================ -->
   
	
	<script type="text/javascript">

    $(document).ready(function(){

      $("#btn-form-submit").click(function(){
        validate_Form();
      });
      function validate_Form(){
        var nameReg = /^([A-Za-z]{3,})+$/;
        var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
        var numbReg = /^([789][0-9]{9,9})+$/;
        var valid_email = $("#valid_email input").val();
        var valid_pass = $("#valid_pass input").val();
        var valid_type = $("#valid_type select").val();
        if(valid_email == ''){
          $("#valid_email span").text('Field required.');
          $("#valid_email span").css('display', 'block');
        } else if(!emailReg.test(valid_email)) {
          $("#valid_email span").text('Please enter valid Email.');
          $("#valid_email span").css('display', 'block');
        } else {
          $("#valid_email span").css('display', 'none');
          svalid_email = "OK";
        }
        if(valid_pass == ''){
          $("#valid_pass span").css('display', 'block');
        } else {
          $("#valid_pass span").css('display', 'none');
          svalid_pass = "OK";
        }
        if(valid_type == ''){
          $("#valid_type span").css('display', 'block');
        } else {
          $("#valid_type span").css('display', 'none');
          svalid_type = "OK";
        }
        if(svalid_email == 'OK' && svalid_pass == 'OK' && svalid_type == 'OK'){
          $("#form-submit").click();
        }
      }
      $("#notification").delay(3000);
      $("#notification").fadeOut('slow');
    });

  </script>
</body>

</html>