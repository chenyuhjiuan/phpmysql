<?php

$dsn = 'mysql:host=us-cdbr-iron-east-02.cleardb.net;dbname=heroku_21a6d789c6a8678';
    $username = 'ba86fb28bcf411';
    $password = '562fc832';

    try {
        $db = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        include('database_error.php');
        exit();
    }

?>