<?php
    try {
        $connection = new PDO("mysql:host=localhost;dbname=aprendizado;", "root", "");
        $connection->exec("set names utf8");
    } catch(PDOException $e) {
        echo "Falha: ".$e->getMessage();
        exit();
    }
?>