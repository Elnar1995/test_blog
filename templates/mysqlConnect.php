<?php
$servername = "127.0.0.1";
$username = "root";
$password = "";
$BDname = "bd_blog";
 
$mysqli = new mysqli($servername, $username, $password, $BDname);
 
/*if ($mysqli -> connect_error) {
    printf("Соединение не удалось: %s\n", $mysqli -> connect_error);
    exit();
};
*/

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