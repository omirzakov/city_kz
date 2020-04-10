<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <a href="#">Хотите добавить город?</a>
    <?php
    $link = mysqli_connect("localhost", "root", "", "world_cities");

    if ($link == false) {
        print("Ошибка: Невозможно подключиться к БД " .  "\n" . mysqli_connect_error());
    } 
    else {
        print("Соединение установлено");
        $sql = "INSERT INTO cities (city_name, city_population) VALUES ('Nursultan', '1500000')";
        $result = mysqli_query($link, $sql);

        if ($result == false) {
            print("Произошла ошибка при выполнении запроса");
        }
        else {
            print("Ваша заявка отправлена");
        }
    }

    mysqli_close($link);

    ?>
    
</body>
</html>