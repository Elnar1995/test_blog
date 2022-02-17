<?php 
    include_once "./templates/generation.php";
?>
 
 
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Главная</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>
    <?php 
        generation_head_menu($mysqli);
    ?>
 
    <div class="container">
        <?php 
            generation_posts_index($mysqli);
        ?>
    </div>
 
</body>
</html>

<?php
$mysqli = new mysqli("localhost", "my_user", "my_password", "world");

/* Проверить соединение */
if ($mysqli->connect_errno) {
    printf("Соединение не удалось: %s\n", $mysqli->connect_error);
    exit();
}

if (!$mysqli->query("SET a=1")) {
    printf("Сообщение ошибки: %s\n", $mysqli->error);
}

/* Закрыть соединение */
$mysqli->close();
?>