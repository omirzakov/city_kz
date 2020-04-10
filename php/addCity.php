<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./../styles/addcity.css">
    <title>Document</title>
</head>
<body>
    <div class="wrapper">
        <form action="addCity_form.php" class="add-city__form" method="POST">
            <div class="main-pg"><a href="http://localhost/php-practice/php/index.php"><</a></div>
            <h3>Добавить город</h3>
            <input type="text" placeholder="Имя города" name="city_name">
            <input type="text" placeholder="Население" name="city_population">
            <button type="submit" class="addcity__btn">Отправить запрос</button>
        </form>
    </div>
    
</body>
</html>