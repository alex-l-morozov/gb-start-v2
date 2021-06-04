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

                <h1>Генератор случайных паролей</h1>

                <div class="box">
                    <?php
                    function gen_password($length = 6)
                    {
                        $chars = 'qazxswedcvfrtgbnhyujmkiolp1234567890QAZXSWEDCVFRTGBNHYUJMKIOLP';
                        $size = strlen($chars) - 1;
                        $password = '';
                        while($length--) {
                            $password .= $chars[random_int(0, $size)];
                        }
                        return $password;
                    }

                    $text = "";
                    if (isset($_POST['lenght'])) {
                        if (intval($_POST['lenght']) > 0) {
                            $text = "Пароль: " . gen_password(intval($_POST['lenght']));
                        } else {
                            $text = "Вы неверно ввели длину пароля.";
                        }
                    }

                    ?>
                    <p><?php
                    echo $text;
                        ?></p>
                    <form method="post" action="/passwd.php">
                    <p>Введите длину пароля</p>
                    <input type="text" name="lenght"><br />
                    <input type="submit" name="submit" value="Генерировать" class="submit">
                    </form>
                </div>

            </div>
        </div>
    </div>



</div>
<div class="footer">
    Copyright &copy; <? echo date('Y');?> Alexander Morozov
    <div>


</body>
</html>