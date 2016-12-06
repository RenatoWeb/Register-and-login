<?php 
    session_start();
    require 'conexao.php'; 
    require 'check.php';
?>
<html lang="pt-br">
    <head>
        <title>Página restrita</title>
        <meta charset="utf-8" />
        <!--<link rel="stylesheet" type="text/css" href="css/style.css">-->
        <link rel="stylesheet" type="text/css" href="css/restricted.css">
    </head>
    <body>
        <div class="back">
        <?php
            if (logged() == true) {
                echo "<p align=center>Olá, ". $_SESSION['user_name'] . "<br><br>Id: ". $_SESSION['user_id'] . "<br><br><a href='logout.php'>Sair</a></p>";
            } else {
                echo "<p>Olá visitante. <a href='login.php'>Login</a></p>";
            }
        ?>
        </div>
    </body>
</html>