<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://fonts.google.com/specimen/Libre+Bodoni" rel="stylesheet">
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Форма авторизации</title>
    <link rel="stylesheet" href="styles/styles.css">
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

    <div class="container mt-4">
        <?php
            if($_COOKIE['user'] == ''):
        ?>
        <div class="row">
            <div class="col">
            <h1>Форма авторизации<br></br></h1>
            <form action="auth.php" method="post">
            <input type="text" class="form-control" name="login"
            id="login" placeholder="Введите логин"><br>
            
            <input type="password" class="form-control" name="pass"
            id="pass" placeholder="Введите пароль"> <?php if($_COOKIE['error4'] != ""){ print($_COOKIE['error4']);setcookie("error4", "Такой пользователь не найден", time() - 3600 * 24 * 30, "/");} ?> <br>
            <button class="closing-button" type="submit"><span>Войти</span></button>
            </form>
        </div>
    <?php else:?>
        <p> Привет <?=$_COOKIE['user']?>. Чтобы выйти нажмите здесь <a href="/exit.php"> здесь </a> </p>
    
    <?php endif;?>
    </div>
</div>
</tr>
</body>
</html>