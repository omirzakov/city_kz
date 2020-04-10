<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

$link = mysqli_connect("localhost", "root", "", "world_cities");

if ($link == false) {
    print("Ошибка: Невозможно подключитсья к БД: ". mysqli_connect_error());
}
else {
    $city_name = $_POST['city_name'];
    $city_population = $_POST['city_population'];
    $sql = "INSERT INTO cities (city_name, city_population) VALUES ('$city_name', '$city_population')";
    $result = mysqli_query($link, $sql);

    $lenCityName = strlen($city_name);
    $lenCityPop = strlen($city_population);

    if ($result == false && $lenCityName == 0 && $lenCityPop == 0) {
        print("Ошибка отправки данных");
    }
    else {
        print("Город добавлен!");
    }
}
?>

    <script src="js/redirect.js"></script>
</body>
</html>