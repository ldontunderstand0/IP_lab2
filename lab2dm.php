<!DOCTYPE html>
<html lang = "en">
<head>
    <meta charset="UTF-8">
    <title>Лабораторная работа №2</title>
    <link rel="stylesheet" href="styles/styles.css">
    <script type="text/javascript" src="/scripts/lab2dm.js"></script>
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
</body>
</html>