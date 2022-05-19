<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Форма регистрации</title>
    <link rel="stylesheet" href="styles/styles.css">
</head>
<body>
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
</div>
</tr>
    <div class="container mt-4">
        <?php
            if($_COOKIE['user'] == ''):
        ?>
        <div class="row">
            <div class="col">
            <h1>Форма регистрации<br></br></h1>
            <form action="check.php" method="post" enctype="multipart/form-data">
            <input type="text" class="form-control" name="login"
            id="login" placeholder="Введите логин"> <?php if($_COOKIE['error1'] != ""){ print($_COOKIE['error1']);setcookie("error1", "Недопустимая длина логина", time() - 3600 * 24 * 30, "/");} ?> <br>
            <input type="text" class="form-control" name="name"
            id="name" placeholder="Введите имя"> <?php if($_COOKIE['error2'] != ""){ print($_COOKIE['error2']);setcookie("error2", "Недопустимая длина имени", time() - 3600 * 24 * 30, "/");} ?> <br>
            <input type="password" class="form-control" name="pass"
            id="pass" placeholder="Введите пароль"> <?php if($_COOKIE['error3'] != ""){ print($_COOKIE['error3']);setcookie("error3", "Недопустимая длина пароля (от 2 до 6 символов)", time() - 3600 * 24 * 30, "/");} ?> <br>
            <input type="password" class="form-control" name="pass2"
            id="pass2" placeholder="Введите повторный пароль"> <?php if($_COOKIE['error'] != ""){ print($_COOKIE['error']);setcookie("error", "Пароли не совпадают", time() - 3600 * 24 * 30, "/");} ?> <br>
            <input type="file" name="img_upload" 
            id="img_upload">
            <?php if($_COOKIE['error5'] != ""){ print($_COOKIE['error5']);setcookie("error5", "Загрузите аватарку", time() - 3600 * 24 * 30, "/");} ?> <br>
            <button class="closing-button" type="submit"><span>Регистрация</span></button>
            </form>
            </div>
    <?php else:?>
        <p> Привет <?=$_COOKIE['user']?>. Чтобы выйти нажмите здесь <a href="/exit.php"> здесь </a> </p>
    
    <?php endif;?>
    </div>
</body>
</html>