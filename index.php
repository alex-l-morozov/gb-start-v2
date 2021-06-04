<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Личный сайт студента GeekBrains</title>
	<link rel="stylesheet" href="style.css"> 
</head>
<body>

<div class="content">
    <?php
    include_once ('./menu.php');
    ?>
	<h1>Личный сайт студента GeekBrains</h1>
	<div class="center">
	<img src="img/photo.png">
		<div class="box_text">
			<p><b>Добрый день</b>. Меня зовут <i>Александр Морозов</i>. Я совсем недавно начал программировать, однако уже написал свой первый сайт.</p>

			<p>В этом мне помог IT-портал <a href="https://geekbrains.ru">GeekBrains</a></p>

			<p>На этом сайте вы сможете ознакомится с программмами и играми, которые я написал: <br>
                <a href="/puzzle.php">Загадки</a><br />
                <a href="/guess.php">Угадайка</a><br />
                <a href="/passwd.php">Генератор паролей</a><br />
			</p>
		</div>
	</div>
</div>
<div class="footer">
	Copyright &copy; <? echo date('Y');?> Alexander Morozov
<div>
</body>
</html>