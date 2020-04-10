<?php
if(isset($_POST["name"])) {
       setcookie("name", $_POST["name"], time() + 20);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="addName.php" method="POST">
        <input type="text" name="name">
        <input type="submit">
    </form>


    <?php
        include 'addName.php';
    ?>

    <?php
    if (isset($_POST["name"])) {
         $name = $_COOKIE['name'];
        echo $name;
    } else {
        echo "Напишите свое имя";
    }
    ?>
</body>
</html>