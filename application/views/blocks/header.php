<!--<div class = "header__logo"><img src="./public/images/logo.png"></div>
		
<div class = "header__menu">
	<p class = "menu__item"><a href="/">HOME</a></p>
	<p class = "menu__item"><a href="vk.com">ABOUT</a></p>
	<p class = "menu__item"><a href="vk.com">CONTACT</a></p>
	<p class = "menu__item"><a href="vk.com">ARTICLES</a></p>
</div>

<div class = "header__login">
	<div class="login__item"><a href="login">REG/AUTH</a></div>
</div>-->

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

			<ul class="navbar-nav nav-regauth m-0">
				<li class="nav-item">
					<a class="nav-link" href="#" data-toggle="modal" data-target="#signInModal">SIGN UP</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">SIGN IN</a>
				</li>
			</ul>
		</div>
	</nav>

	<div id="signInModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="my-modal-title" aria-hidden="true">
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
						<form action="regist">
							<div class="form-group">
								<label for="signin-login">Login</label>
								<input id="signin-login" class="form-control" type="text" placeholder="your login">
							</div>

							<div class="form-group">
								<label for="signin-pass">Password</label>
								<input id="signin-pass" class="form-control" type="password" placeholder="your password">
							</div>

							<div class="form-group">
								<label for="signin-email">Email</label>
								<input id="signin-email" class="form-control" type="text" placeholder="your email">
							</div>

							<p class="errorMessage"></pc>
							
							<button type="submit" class="btn btn-primary">Register</button>
						</form>
					</div>
				</div>
				
			</div>
		</div>
	</div>

	<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
	<script src="./public/js/registration/reg.js"></script>