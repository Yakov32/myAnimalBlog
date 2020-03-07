<!DOCTYPE html>
<html lang="en">
<head>
	<?php require_once "./application/views/blocks/head.php"; ?>
</head>
<body>
	<header>
		<?php require_once "blocks/header.php"; ?>
	</header>
	
	<div class="login-page">
		<div class="form">
			<form class="form-register" action="login#reg">
				<p class="string">Register</p>
				<input type="text" name="" placeholder="Login">
				<input type="password" name="" placeholder="password">
				<input type="text" name="" placeholder="email">
				<button>Register</button>
				<p class = "message">ALready Registered? <a href="#">Login</a></p>
			</form>

			<form class ="Login-form" action="login#auth">
				<p class="string">Login</p>
				<input type="text" name="" placeholder="Username">
				<input type="password" name="" placeholder="Password">
				<button>Login</button>
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
</body>
</html>