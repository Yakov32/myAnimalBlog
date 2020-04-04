<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<a class="navbar-brand" href="#" style="font-size:25px;">ANIMAL <span style="color:orange;">B</span>LOG</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav navbar-menu mr-auto">
				<li class="nav-item active">
					<a class="nav-link" href="#">Home</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">About Us</a>
				</li>
				<li class="nav-item mr-auto">
					<a class="nav-link" href="#">Contact</a>
				</li>

				<li class="nav-item mr-auto">
					<a class="nav-link" href="#">Articles</a>
				</li>
			</ul>
			
			<form class="form-inline my-2 my-lg-0 navbar-search-form">
				<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
				<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
			</form>

				<?php if(!empty($_SESSION['user'])):?>
					<div class="nav-item nav-user">
						<img src="./public/images/user.png" alt="user-avatar">
						<div class="dropdown show success">
							<a style="font-size:16px;border-radius:10%;" class="btn btn-light dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<?=$_SESSION['user']['login']?>
							</a>

							<div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
								<a class="dropdown-item" href="my-profile?cont_method=profile_show">MyProfile</a>
								<a class="dropdown-item" href="#">Edit Profile</a>
								<a class="dropdown-item" href="login?cont_method=logout">Logout</a>
							</div>
						</div>
					</div>

				<?php else:?>
					<ul class="navbar-nav nav-regauth m-0">
						<li class="nav-item user-">
							<a class="nav-link" href="#" data-toggle="modal" data-target="#signUpModal">SIGN UP</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#" data-toggle="modal" data-target="#signInModal">SIGN IN</a>
						</li>
					</ul>
				<?php endif;?>

				
				
			</ul>
		</div>
	</nav>

	<div class="container alert-message">
		<div class="alert alert-light" role="alert" hidden>
			<?php 
				echo($_SESSION)['alert'];
				$_SESSION['alert'] = "";	
			?>
			<button type="button" class="close" data-dismiss="alert" aria-labe="close">
				<span>&times;</span>
			</button>
		</div>
	</div>

	<div id="signUpModal" class="modal fade reg_auth reg_block" tabindex="-1" role="dialog" aria-labelledby="my-modal-title" aria-hidden="true">
		<div class="modal-dialog modal-sm" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title text-center" id="my-modal-title">SIGN UP</h5>
					<button class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div class="container-fluid">
						<form action="regist?cont_method=reg" method="post" class="regForm">
							<div class="form-group">
								<label for="signin-login">Login</label>
								<input name="regLogin" id="signin-login" class="form-control" type="text" placeholder="your login" required>
							</div>

							<div class="form-group">
								<label for="signin-password">Password</label>
								<input name="regPassword" id="signin-password" class="form-control" type="password" placeholder="your password" required>
							</div>

							<div class="form-group">
								<label for="signin-email">Email</label>
								<input name="regEmail" id="signin-email" class="form-control" type="text" placeholder="your email" required>
							</div>

							<p class="reg_errorMessage"></p>
							
							<button type="submit" class="btn btn-primary">Register</button>
						</form>
					</div>
				</div>
				
			</div>
		</div>
	</div>

	<div id="signInModal" class="modal fade reg_auth auth_block" tabindex="-1" role="dialog" aria-labelledby="my-modal-title" aria-hidden="true">
		<div class="modal-dialog modal-sm" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title text-center" id="my-modal-title">SIGN IN</h5>
					<button class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div class="container-fluid">
						<form action="login?cont_method=sign_up" method="post">
							<div class="form-group">
								<label for="signin-login">Login</label>
								<input name="authLogin" id="signin-login" class="form-control" type="text" placeholder="your login" required>
							</div>

							<div class="form-group">
								<label for="signin-password">Password</label>
								<input name="authPassword" id="signin-password" class="form-control" type="password" placeholder="your password" required>
							</div>

						
							<p class="auth_errorMessage"></p>
							
							<button type="submit" class="btn btn-primary">Auth</button>
						</form>
					</div>
				</div>
				
			</div>
		</div>
	</div>
