<?php


    $dsn = "mysql:host=localhost;dbname=tgdd";

    $options = array(
        PDO::FETCH_ASSOC => "SET NAMES 'utf8'",
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    );

try {
    $connect = new PDO($dsn, 'root', '123456@', $options);

}
catch (PDOException $e) {
    echo  $e->getMessage();
    exit();
}