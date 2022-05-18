<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://fonts.google.com/specimen/Libre+Bodoni" rel="stylesheet">
<meta charset="UTF-8">
<title>Галерея</title>
<link rel="stylesheet" href="styles/styles.css">
<script type="text/javascript" src="scripts/jquery-3.6.0.js"></script>
<script type="text/javascript" src="scripts/scripts.js"></script>
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
<div class = "gallery" >
        <div class = "buttonGallery1" onclick="LeftClickImage()"> <img src="/images/left.png"> </div>
        <div>
            <img id="mainImage">
        </div>
        <div class = "buttonGallery2" onclick="RightClickImage()"> <img src="/images/right.png"> </div>
</div>
</tr>
</body>
</html>