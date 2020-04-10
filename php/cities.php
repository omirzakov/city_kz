<?php
        $link = mysqli_connect("localhost", "root", "", "world_cities");

        if ($link == false) {
            print('Ошибка: Невозможно подключиться к БД '. mysqli_connect_error());
        }
        else {
            $sql = 'SELECT * FROM cities';

            if ($sql == false) {
                print("Ошибка 404");
            }
            else {
                $sql = "SELECT * FROM cities";
                $result = mysqli_query($link, $sql);
                while ($row = mysqli_fetch_array($result)) {
                    print( '<li>'."Город:  ". $row['city_name']. "; Население: ". $row['city_population'] . '</li>' . '<br>' );
                }
            }
        }
        mysqli_close($link);
?>