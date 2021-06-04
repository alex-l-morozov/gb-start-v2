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

<div class="contentWrap">
    <div class="content">
        <div class="center">

			<h1>Игра в загадки</h1>

			<div class="box">
                <?php
                if (isset($_POST['userAnswer1']) &&
                    isset($_POST['userAnswer2']) &&
                    isset($_POST['userAnswer3']) &&
                    isset($_POST['userAnswer4'])) {
                    $count = 0;
                    $arAnswer = [
                        ["еж","ёж"],
                        ["водопровод"],
                        ["граммофон"],
                        ["книга"],
                    ];
                    $answerUser = $_POST['userAnswer1'];
                    for ($i = 0; $i < count($arAnswer[0]); $i++) {
                        if ($arAnswer[0][$i] == strtolower($answerUser)) {
                            $count++;
                        }
                    }
                    $answerUser = $_POST['userAnswer2'];
                    for ($i = 0; $i < count($arAnswer[1]); $i++) {
                        if ($arAnswer[1][$i] == strtolower($answerUser)) {
                            $count++;
                        }
                    }
                    $answerUser = $_POST['userAnswer3'];
                    for ($i = 0; $i < count($arAnswer[3]); $i++) {
                        if ($arAnswer[3][$i] == strtolower($answerUser)) {
                            $count++;
                        }
                    }
                    $answerUser = $_POST['userAnswer4'];
                    for ($i = 0; $i < count($arAnswer[4]); $i++) {
                        if ($arAnswer[3][$i] == strtolower($answerUser)) {
                            $count++;
                        }
                    }
                    echo "<p><strong>Вы отгадали {$count} загадок</strong></p>";
                }
                ?>
                <form method="post" action="/puzzle.php">
				<p>Вот иголки и булавки<br>
                    Выползают из-под лавки,<br>
                    На меня они глядят,<br>
                    Молока они хотят</p>
				<input type="text" name="userAnswer1">

				<p>Речка спятила с ума —<br>
                    По домам пошла сама</p>
				<input type="text" name="userAnswer2">

				<p>Музыкант, певец, рассказчик —<br>
                    А всего труба да ящик.</p>
				<input type="text" name="userAnswer3">
                    <p>Страну чудес откроем мы<br>
                        И встретимся с героями<br>
                        В строчках,<br>
                        На листочках,<br>
                        Где станции на точках</p>
                    <input type="text" name="userAnswer4">

				<br>
                    <input type="submit" name="submit" value="Ответить" class="submit">
                </form>

			</div>

        </div>
    </div>
</div>

	

</div>
<div class="footer">
	Copyright &copy; Vasily Pupkin
<div>


</body>
</html>