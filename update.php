<!DOCTYPE html>
<html lang="en">
<head> 
<link href="https://fonts.google.com/specimen/Oleo+Script" rel="stylesheet">
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Изменение</title>
<link rel="stylesheet" href="styles/styles.css">
<script type="text/javascript" src="scripts/jquery-3.6.0.js"></script>
<script type="text/javascript" src="scripts/scripts.js"></script>
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

<div class="cont">

<?php if($_COOKIE['admin']==1):?>
    <div class="adminpanel">
    <form action="adminedit.php?id=<?=$_GET['id'];?>" method="post" enctype="multipart/form-data" class="admininput">
        Пользователь<br>
        <input type="text"  placeholder="Новый логин" class="textarea" name="login" id="login"/> <?php if($_COOKIE['error11'] != ""){ print($_COOKIE['error11']);setcookie("error11", "Недопустимая длина логина", time() - 3600 * 24 * 30, "/");} ?> <br>
        <input type="text"  placeholder="Новое имя" class="textarea" name="name" id="name"/> <?php if($_COOKIE['error12'] != ""){ print($_COOKIE['error12']);setcookie("error12", "Недопустимая длина имени", time() - 3600 * 24 * 30, "/");} ?><br>
        <input type="password"  placeholder="Новый пароль" class="textarea" name="pass" id="pass"/> <?php if($_COOKIE['error13'] != ""){ print($_COOKIE['error13']);setcookie("error13", "Недопустимая длина пароля (от 2 до 6 символов)", time() - 3600 * 24 * 30, "/");} ?> <br>
        <input type="password"  placeholder="Повторите новый пароль" class="textarea" name="pass2" id="pass2"/> <?php if($_COOKIE['error14'] != ""){ print($_COOKIE['error14']);setcookie("error14", "Пароли не совпадают", time() - 3600 * 24 * 30, "/");} ?> <br>
            Новая аватарка<br>
        <input type="file" class="file" name="img_upload" id="img_upload"/> <?php if($_COOKIE['error15'] != ""){ print($_COOKIE['error15']);setcookie("error15", "Загрузите аватарку", time() - 3600 * 24 * 30, "/");} ?> <br>
        <button class="addbutton" type="submit" id="add" name="add">Изменить пользователя</button>
    </form>
    <?php else:?>
        Данный пользователь не является админом
    <?php endif;?>
    </div>
    </div>
</div>
</body>

</html>