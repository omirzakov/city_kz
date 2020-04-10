<?php

        if(isset($_COOKIE['name'])) {
            $name = $_COOKIE['name'];
        } else {
            $name = "Вы не написали свое имя";
        }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./../styles/style.css">
    <link rel="shortcut icon" href="img/города.jpg">
    <title>Города </title>
</head>
<body>
    
    <h1>Города Казахстана</h1>
    
     <?php
          echo "Привет:  " .  $name;
     ?>
    <a href="addCity.php" class="add-city__btn">Хотите добавить свой город?</a>
    <a href="http://localhost/php-practice/php/addName.php" class="add-name__btn">Написать свое имя</a>

    <ul class="cities-kz">
                        <?php
                            include 'cities.php';
                        ?>
     </ul>

    <div class="chat-bot">
        <a href="#">Меню нашего сайта</a>
    </div>

    <div class="chat-menu">
        <a href="#">Статистика</a>
        <a href="#">Карта</a>
        <a href="#">Народ</a>
        <a href="#">Регионы</a>
    </div>

    <script src="js/window-bot.js"></script>
    <script src="js/index.js"></script>
</body>
</html>