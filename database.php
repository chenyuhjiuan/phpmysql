<?php

$dsn = 'mysql:host=localhost;dbname=my_guitar_shop1';
    $username = '12345';
    $password = '1234';

    try {
        $db = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        include('database_error.php');
        exit();
    }

?>