<!DOCTYPE html>
<html lang = "en">
<head>
    <title>Лабораторная работа №5</title>
    <link rel="stylesheet" href="styles/styles.css">
</head>
<body>
<tr>
<div class="panel">
        <a href="index.php"><font size=5>Главная</font></a></td>
        <a href="info.php"><font size=5>О себе</font></a></td>
        <a href="labs.php"><font size=5>Лабы по ДМ</font></a></td>
        <a href="galery.php"><font size=5>Галерея</font></a></td>
        <a href="contacts.php"><font size=5>Ссылки</font></a></td>
        <div class="reg">
            <a href="enter.php"><font size=5>Вход</font></a></td>
            <a href="registration.php"><font size=5>Регистрация</font></a></td>
        </div>
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
</body>
</html>