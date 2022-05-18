<!DOCTYPE html>
<html lang = "en">
<head>
    <title>Лабораторная работа №4</title>
    <link rel="stylesheet" href="styles/styles.css">
</head>
<body bgcolor="white">
<tr>
<div>
    <a href="index.php" class="closing-button"><span>Главная</span></a></td>
    <a href="info.php" class="closing-button"><span>О себе</span></a></td>
    <a href="labs.php" class="closing-button"><span>Лабы по ДМ</span></a></td>
    <a href="galery.php" class="closing-button"><span>Галерея</span></a></td>
    <a href="contacts.php" class="closing-button"><span>Ссылки</span></a></td>
    <div class="avtorisator">
            <?php
                if($_COOKIE['user']==''):
            ?>


            <a href="registr.php" class="closing-button"><span>Регистрация/вход</span></a></td>

            </a>
            <?php else:?>
                <div>
                    <a href="exit.php" class="closing-button"><span>Выход</span></a>
                    <a href="userpage.php" class="closing-button"><span><?=$_COOKIE['user']?></span></a>
                </div>
            <?php endif;?>

        </div>
</div>
</tr>
<h1>Лабораторная работа №4</h1>
<form method="post">
    <textarea style = "width: 220px; height: 123px;" id="matrix" name = "matrix" placeholder=
    "Введите матрицу.
Пример ввода:
0 2 3 4 10
1 0 0 1 0
0 3 0 2 0
0 0 1 0 5
0 3 0 0 0"><?=$_POST['matrix']?></textarea>
<br>Начальная вершина
    <input style = "width: 80px;" type = "text" name = "start"  value = '<?= $_POST[start]?>'><br>Конечная вершина
    <input style = "width: 80px; margin-left: 8px" type = "text" name = "finish"  value = '<?= $_POST[finish]?>'><br>
    <input type="submit" value="Рассчитать">
</form>
<?php
if ($_POST[start] == "" ){
    exit('Введите первую вершину');
}
if ($_POST[finish] == ""){
    exit('Введите вторую вершину');
}
$start = $_POST[start] - 1;
$finish = $_POST[finish] - 1;
$matrix = explode("\r\n", trim($_POST[matrix], " "));
for($i = 0; $i < count($matrix); $i++) {
    $matrix[$i] = explode(" ", $matrix[$i]);
    if (count($matrix) != count($matrix[$i])) {
        exit('Матрица введена неверно');
    }
}
for ($i = 0; $i < count($matrix); $i++) {
    $marker[$i] = 999;
}
$minindex = $start;
$index[0] = $start;
$marker[$minindex] = 0;
while ($minindex != -999) { 
    for ($i = 0; $i < count($matrix); $i++) {
        if (!array_search($i, $index) && $matrix[$minindex][$i] != '0') { 
            $temp = $marker[$minindex] + $matrix[$minindex][$i];
            if ($marker[$i] > $temp) {
                $marker[$i] = $temp;
            }
        }
    }
    $minindex = -999;
    $minmarker = 999;
    for ($i = 0; $i < count($matrix); $i++)  {
        $bool = true;
        for ($j = 0; $j < count($index); $j++) {
            if ($i == $index[$j]) {
                $bool = false;
            }
        }
        if ($bool) {
            if ($minmarker > $marker[$i]) {
                $minmarker = $marker[$i];
                $minindex = $i;
            }
        }
    }

    if ($minindex >= 0) {
        array_push($index,$minindex);
    }
}
echo('<br> Кратчайший путь: ' . $marker[$_POST[finish]-1]);
?>

</body>
</html>