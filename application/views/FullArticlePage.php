<!DOCTYPE html>
<html lang="en">
<head>
	<?php require_once "blocks/head.php"; ?>
</head>
<body>

<header> <?php require_once "blocks/header.php"; ?></header>

<div class="main-content">
    <div class="leftColumn">
        <div class="content content-article-page">
            <img src="./public/images/posts/<?=$pageData['post']['image']?>" alt="Picture">
            <div class="article-body">
                <h1><?=$pageData['post']['title'];?></h1>
                <p><?=$pageData['post']['content'];?></p>
            </div>
        </div>
    </div>

    <div class="RightColumn">
        <?php require_once "blocks/content.right-column.php"; ?>
    </div>
</div>
    
<footer></footer>
    
    

	
</body>
</html>