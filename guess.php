<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Личный сайт студента GeekBrains</title>
	<link rel="stylesheet" href="style.css"> 
	<script type="text/javascript">

		var answer = parseInt(Math.random() * 100);
		var tryCount = [0, 0];
		var maxTryCount = 3;
		var user = 1;

		function readInt(){
			var number = document.getElementById("userAnswer").value;
			return parseInt(number);
			// return +document.getElementById("userAnswer").value;
		}

		function write(text){
			document.getElementById("info").innerHTML = text;
		}

		function hide(id){
			document.getElementById(id).style.display = "none";
		}

		function guess(){
			var userAnswer = readInt();
			if(userAnswer == answer){
				write("<b>Поздравляю, игрок " + user + " угадал!</b>");
				hide("button");
				hide("userAnswer");
			} else if(tryCount[1] >= maxTryCount){
				write("Вы проиграли<br>Правильный ответ: " + answer);
				hide("button");
				hide("userAnswer");
			} else if(userAnswer > answer){
                tryCount[user]++;
                if (user == 1)
                    user = 2;
                else
                    user = 1;
				write("Вы ввели слишком большое число.<br>Очередь Игрока " + user + ". Введите число от 1 до 100");
			} else if(userAnswer < answer){
                tryCount[user]++;
                if (user == 1)
                    user = 2;
                else
                    user = 1;
				write("Вы ввели слишком маленькое число<br>Очередь Игрока " + user + ". Введите число от 1 до 100");
			}
		}

	</script>
</head>
<body>

<div class="content">
    <?php
    include_once ('./menu.php');
    ?>

<div class="contentWrap">
    <div class="content">
        <div class="center">

			<h1>Игра угадайка на двух игроков</h1>

			<div class="box">

				<p id="info">Угадайте число от 0 до 100. Игрок 1</p>
				<input type="text" id="userAnswer">
				<br>
				<a href="#" onClick="guess();" id="button">Начать</a>				
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