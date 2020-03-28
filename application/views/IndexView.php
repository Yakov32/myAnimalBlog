<!DOCTYPE html>
<html lang="en">
<head>
	<?php require_once "blocks/head.php"; ?>
</head>
<body>
	<!------------HEADER-->
	<?php require_once "blocks/header.php"; ?>
	
<div id = "homePageContent">
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
			
			<div class="articlesSection">
			    <?php foreach($pageData['articles'] as $article):?>
					<div class="article">
						<img src="<?='./public/images/posts/'. $article['image']?>" alt="Picture">
						<p class="article_heading"><?=$article['title']?></p>
						<p class="article_content"><?=$article['content']?></p>
					</div>
				<?php endforeach;?>	
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

		<div class="RightColumnt">
			
		</div>
	</div>

	<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
	<script src="./public/js/bootstrap/bootstrap.min.js"></script>
	
	<script src="./public/js/slider/slick.min.js"></script>
	<script src="./public/js/slider/script.js"></script>

</body>
</html>