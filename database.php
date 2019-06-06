<?php

$dsn = 'mysql:host=us-cdbr-iron-east-02.cleardb.net;dbname=heroku_5e907bdc9b6557b';
    $username = 'bba22f694b9e4e';
    $password = 'b6cdee2e';

    try {
        $db = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        include('database_error.php');
        exit();
    }

?>