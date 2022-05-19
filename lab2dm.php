<!DOCTYPE html>
<html lang = "en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Лабораторная работа №2</title>
    <link rel="stylesheet" href="styles/styles.css">
    <script type="text/javascript" src="/scripts/lab2dm.js"></script>
</head>
<body bgcolor="white">
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
<h1>Лабораторная работа №2</h1>
<form>
    <table>
        <tr>
            <td>Введите бинарную матрицу n*n</td>
            <td> <textarea id="arr" value="" rows = "10" cols = "20" size="" placeholder="Пример:
1 0 1
0 0 0
1 0 0"></textarea></td>
        </tr>
        <tr>
            <td colspan="2"> <input type="button" value="Расчитать"  onclick="main();"/></td>
        </tr>
    </table>
</form>
<div id ="matrix"></div>
<div id ="result"></div>
</div>
</body>
</html>