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