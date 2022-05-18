<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://fonts.google.com/specimen/Libre+Bodoni" rel="stylesheet">
<meta charset="UTF-8">
<title>Ссылки</title>
<link rel="stylesheet" href="styles/styles.css">
<script type="text/javascript" src="scripts/jquery-3.6.0.js"></script>
<script type="text/javascript" src="scripts/scripts.js"></script>
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
<div class="imges">
    <img class="img3" src="/images/3.jpg">
    <div class="cont">
    <a href= "https://vk.com/airjaba"<p>Вконтакте</p></a>
    <a href= "https://github.com/ldontunderstand0"<p>Github</p></a>
    <a href= "https://steamcommunity.com/id/airjaba/"<p>Steam</p></a>
    </div>
    <img class="img4" src="/images/4.jpg">
</div>
</tr>
</body>
</html>