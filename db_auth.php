<?php
    /* Подключение к серверу MySQL, лучше так не подключаться */
    $mysql = new mysqli('localhost', 'root', 'root', 'regist-bd');
    if (mysqli_connect_errno()) {
        printf("Подключение к серверу MySQL невозможно. Код ошибки: %s<br>", mysqli_connect_error());
        exit;
    }
?>