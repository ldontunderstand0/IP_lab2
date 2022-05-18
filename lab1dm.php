<!DOCTYPE html>
<html lang = "en">
<head>
    <meta charset="UTF-8">
    <title>Лабораторная работа №1</title>
    <link rel="stylesheet" href="styles/styles.css">
    <script type="text/javascript" src="/scripts/lab1dm.js"></script>
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
<h1>Лабораторная работа №1</h1>
<form>
    <table>
        <tr>
            <td>Первый массив:</td>
            <td> <input type="text" id="arr1" value="" size="50" placeholder="Пример: 2 3 7 9"></td>
        </tr>
        <tr>
            <td>Второй массив:</td>
            <td> <input type="text" id="arr2" value="" size="50" placeholder="Пример: 4 5 3 1"></td>
        </tr>
        <tr>
            <td colspan="2"> <input type="button" value="Расчитать" onclick="main();"></td>
        </tr>
    </table>
</form>
<div id="union"></div>
<div id="cross"></div>
<div id="difference"></div>
<div id="addAtoB"></div>
<div id="addBtoA"></div>
</body>
</html>