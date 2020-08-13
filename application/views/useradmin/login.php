<!DOCTYPE html>
<?php
$message2 = $this->session->userdata('message2');
?>
<html lang="en">
<head>
	<title>UserAdmin Login </title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>admin_vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>admin_fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>admin_fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>admin_vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>admin_vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>admin_vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>admin_vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>admin_vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>admin_css/util.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>admin_css/main.css">
<!--===============================================================================================-->
</head>
<body>
	<?php
           // if(isset($_SESSION['message']) && $_SESSION['message']!="")
           if(isset($message2) && $message2!="")
            {
            ?>
            <div id="resultblock" class="notification success hideit" style="margin-top:100px;margin-left:220px;"><strong></strong><?php  echo $message2; ?></div>
           <?php }
          $this->session->unset_userdata('message2');?>
	<div class="limiter">
		<div class="container-login100">
		     
			<div class="wrap-login100 p-t-50 p-b-90">
				<form class="" action="<?php echo base_url();?>useradmin/login" method="post" id="loginform">
					<span class="login100-form-title p-b-51">
					UserAdmin Login
					</span>
                 <div class="wrap-input100 validate-input m-b-16" data-validate = "Username is required" >
						<input class="input100" type="text" name="username" placeholder="Username" required>
						<span class="focus-input100"></span>
					</div>
					
					
					<div class="wrap-input100 validate-input m-b-16" data-validate = "Password is required">
						<input class="input100" type="password" name="pass" placeholder="Password" required>
						<span class="focus-input100"></span>
					</div>
						
					<div class="flex-sb-m w-full p-t-3 p-b-24">
						<!--<div class="contact100-form-checkbox">-->
						<!--	<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">-->
						<!--	<label class="label-checkbox100" for="ckb1">-->
						<!--		Remember me-->
						<!--	</label>-->
						<!--</div>-->

						<div>
							<a href="#" id="forgotbtn" class="txt1">
								Forgot?
							</a>
						</div>
					</div>

					<div class="container-login100-form-btn m-t-17">
						<button class="login100-form-btn">
							Login
						</button>
					</div>

				</form>
				<form class="" action="<?php echo base_url();?>useradmin/forgotpassword" method="post" id="forgotpassform" style="display:none;">
					    <div class="wrap-input100 validate-input m-b-16">
						<input class="input100" type="text" name="email" placeholder="Email" required>
						<span class="focus-input100"></span>
					</div>
						<div class="flex-sb-m w-full p-t-3 p-b-24">
						<div>
							<a href="<?php echo base_url();?>admin"  class="txt1">
								Back to login?
							</a>
						</div>
					</div>
					<div class="container-login100-form-btn m-t-17">
						<button class="login100-form-btn">
							Submit
						</button>
					</div>
					    </form>	
			</div>
			
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
	
<!--===============================================================================================-->
	<script src="<?php echo base_url(); ?>admin_vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url(); ?>admin_vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url(); ?>admin_vendor/bootstrap/js/popper.js"></script>
	<script src="<?php echo base_url(); ?>admin_vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url(); ?>admin_vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url(); ?>admin_vendor/daterangepicker/moment.min.js"></script>
	<script src="<?php echo base_url(); ?>admin_vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url(); ?>admin_vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url(); ?>admin_js/main.js"></script>
	<script type="text/javascript">
        $(document).ready(function() {
             $("#result,#resultblock,#resultproduct,#resultAjax").click(function() {
                    //fades the notification out	
                    $(this).fadeOut(500);
                });
                var delay = 5000;
        setTimeout(function() {
            $("#result,#resultblock,#resultAjax").hide();
        }, delay);
          $('#bootstrap-data-table-export').DataTable();
        } );
    </script>
 <script type="text/javascript">
      $(function() {
	$("#forgotbtn").click(function() {
                            $("#forgotpassform").show();
                            $("#loginform").hide();
                        });
                    })
  </script>
</body>
</html>