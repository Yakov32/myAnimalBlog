<!DOCTYPE html>
<html lang="en">
<head>
	<?php require_once "blocks/head.php"; ?>
</head>
<body>
	<!------------HEADER-->
	<?php require_once "blocks/header.php"; ?>

	<div class="container alert-message">
		<div class="alert alert-light" role="alert" hidden>
			<?=$pageData['alertMessage'];?>
			<button type="button" class="close" data-dismiss="alert" aria-labe="close">
				<span>&times;</span>
			</button>
		</div>
	</div>
	
<div class="main-content home-page-content">
		<div class="leftColumn">	
			<div class="slider">
				<div class="slider_item">
					<img src="./public/images/monkey.png">
				</div> 

				<div class="slider_item">
					<img src="../public/images/wolf.png">
				</div>

				<div class="slider_item">
					<img src="./public/images/fox.png">
				</div>

				<div class="slider_item">
					<img src="./public/images/racoon.png">
				</div>

				<div class="slider_item">
					<img src="./public/images/panda.png">
				</div>

				<div class="slider_item">
					<img src="./public/images/kangaroo.png">
				</div>

			</div>
			
			<div class="container-fluid posts-container">
				<div class="container p-1">
					<?php foreach($pageData['articles'] as $article):?>
						<div class="card mb-4">
							<img class="card-img-top" src="<?='./public/images/posts/'. $article['image']?>" alt="Picture">
							<div class="card-body">
								<h5 class="card-title text-center"><?=$article['title']?></h5>
								<p class="card-text"><?=$article['content']?></p>
								<a href="#" class="btn btn-primary">Read Full</a>
							</div>
						</div>
					<?php endforeach;?>	
				</div>
			</div>
			
			    

			<div class="clear"></div>

			<div class="addArticle">
				<form enctype="multipart/form-data" class ="addForm" action="post?cont_method=addArticle" method="POST">
					<input name="title" placeholder="TITLE">
					<textarea name="content" placeholder="Введите контент.." cols="30" rows="10"></textarea>
					<input name="image" placeholder="image" type="file" >
					<input type="submit" class="form_submit" value="Добавить пост">
				<div class="message"><?=$pageData['articleMessage']?></div>
				</form>
			</div>

		</div>

		<div class="RightColumn">
		</div>
	</div>
	

	<footer>

	</footer>
	<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
	<script src="./public/js/bootstrap/bootstrap.min.js"></script>
	
	<script src="./public/js/slider/slick.min.js"></script>
	<script src="./public/js/slider/script.js"></script>

	<script src="./public/js/registration/reg.js"></script>

</body>
</html>