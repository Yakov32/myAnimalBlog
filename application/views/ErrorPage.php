<!DOCTYPE html>
<html lang="en">
<head>
	<?php require_once "blocks/head.php"; ?>
</head>
<body>

<header> <?php require_once "blocks/header.php"; ?></header>


<div class="main-content">
    <div class="leftColumn">
		<img src="./public/images/pageNotFound.png" style="width:100%;height:650px;" alt="Page not found">
		<div class="go-to-home" style="width:100%;background-color:white;"><a href="/" style="margin-left:30%;font-size:65px;">Go to Home</a></div>
	</div>

    <div class="RightColumn">
    <?php require_once "blocks/content.right-column.php"; ?>
    </div>
</div>

<footer></footer>
	
</body>
</html>