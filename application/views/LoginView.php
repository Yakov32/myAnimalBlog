<!DOCTYPE html>
<html lang="en">
<head>
	<?php require_once "./application/views/blocks/head.php";
	?>
</head>
<body>
	<header>
		<?php require_once "blocks/header.php"; ?>
	</header>
	
	<div class="login-page">
		<div class="form">
			<form class="form-register" action="regist?cont_method=reg" method="POST">
				<p class="string">Register</p>
				<input type="text" name="RegLogin" placeholder="Login" class ="reg_login">
				<input type="password" name="RegPass" placeholder="password" class ="reg_pass">
				<input type="text" name="RegEmail" placeholder="email" class ="reg_email">
				<p class="reg_errorMessage"><?php print_r($pageData['errorMessage']);?></p> <!--This is message with mistake that makes in Js.scirpt-->
				<input type="submit" class ="form_submit reg_Button"></input>
				<p class = "message">ALready Registered? <a href="#">Login</a></p>
			</form>

			<form class ="Login-form" action="login?method=autho" >
				<p class="string">Login</p>
				<input type="text" name="AuthLogin" placeholder="Username" class="auth_login">
				<input type="password" name="AuthPass" placeholder="Password"  class="auth_pass"> 
				<input type="submit" class ="form_submit log_Button"></input>
				<p class = "message">Non Registered? <a href="#">Register</a></p>	
			</form>
		</div>
	</div>

	<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
	<script type="text/javascript">
		$('.message a').click(function(){
			$('form').animate({height:"toggle",opacity: "toggle"},
			 "slow");
		});	
	</script>
	<script src="./public/js/registration/reg.js"></script>
</body>
</html>