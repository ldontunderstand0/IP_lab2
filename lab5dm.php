<!DOCTYPE html>
<html lang = "en">
<head>
    <title>Лабораторная работа №5</title>
    <link rel="stylesheet" href="styles/styles.css">
    <meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<tr>
<div class="mobile">
    <a href="index.php" class="closing-button"><span>Главная</span></a></td>
    <a href="info.php" class="closing-button"><span>О себе</span></a></td>
    <a href="labs.php" class="closing-button"><span>Лабы по ДМ</span></a></td>
    <a href="galery.php" class="closing-button"><span>Галерея</span></a></td>
    <a href="contacts.php" class="closing-button"><span>Ссылки</span></a></td>
    <div class="avtorisator">
            <?php
                if($_COOKIE['user']==''):
            ?>
            <a href="enter.php" class="closing-button"><span>Вход</span></a></td>
            <a href="registr.php" class="closing-button"><span>Регистрация</span></a></td>
            </a>
            <?php else:?>
                <div>
                    <a href="exit.php" class="closing-button"><span>Выход</span></a>
                    <a href="userpage.php" class="closing-button"><span><?=$_COOKIE['user']?></span></a>
                </div>
            <?php endif;?>
        </div>
</tr>
<h1>Лабораторная работа №5</h1>
<form method="post">
    <textarea style = "width: 220px; height: 123px;" id="matrix" name = "matrix" placeholder=
    "Введите матрицу смежности
Пример ввода:
0 0 1 0
0 0 0 0
0 1 0 1
0 0 1 0"><?=$_POST['matrix']?></textarea><br>
    <input type="submit" value="Рассчитать">
</form>
<?php
$count = 0;
$matrix = explode("\r\n", trim($_POST[matrix], " "));
for($i = 0; $i < count($matrix); $i++) {
    $matrix[$i] = explode(" ", $matrix[$i]);
    if (count($matrix) != count($matrix[$i])) {
        exit('Матрица введена неверно');
    }
}
while($c < 2){
    for($i = 0; $i < count($matrix); $i++) {
        for($j = 0; $j < count($matrix); $j++) {
            if ($matrix[$i][$j] == '1'){
                for($z = 0; $z < count($matrix); $z++) {
                    $matrix[$i][$z] = $matrix[$i][$z] + $matrix[$j][$z];
                    if ($matrix[$i][$z] > '1'){
                        $matrix[$i][$z] = 1;
                    }
                }
            }
        }
    }
    $c++;
}
for($i = 0; $i < count($matrix); $i++) {
    $matrix[$i][$i] = 1;
}
echo("Матрица достижимости:<br>");
for ($i = 0; $i < count($matrix); $i++) {
    for ($j = 0; $j < count($matrix); $j++) {
        echo($matrix[$i][$j]);
        echo(" ");
    }
    echo("<br>");
}
?>
</div>
</body>
</html>