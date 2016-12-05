<?php include "conexao.php"; ?>
<html lang="pt-br">
    <head>
        <title>Tratamento</title>
        <meta charset="utf-8" />
        <link rel="stylesheet" type="text/css" href="css/style.css" />
    </head>
    <body class="thrid">
        <div class="informacoes">
        <?php
            echo "<p align=center><b>O nome informado foi:</b> ". $_POST["nome"]."</p> <br>";
            echo "<p align=center><b>A data de nascimento informada foi:</b> ". $_POST["dtNascimento"]."</p> <br>";
            echo "<p align=center><b>O email informado foi:</b> ". $_POST["email"]."</p> <br>";
            echo "<p align=center><b>A senha informada foi:</b> ". $_POST["senha"]."</p> <br>";
        ?>
        </div>
        <?php
            if (isset($_POST["nome"]) == false || strlen(utf8_decode($_POST["nome"])) < 3) {
                $analise = "<p align=center>Esse campo não é válido!</p>";
            } else if (isset($_POST["dtNascimento"]) == false) {
                $analise = "<p align=center>Digite uma data válida!</p>";
            } else if (isset($_POST["email"]) == false || filter_var($_POST["email"], FILTER_VALIDATE_EMAIL) == false) {
                $analise = "<p align=center>Digite um email válido!</p>";
            } else if (isset($_POST["senha"]) == false || strlen(utf8_decode($_POST["senha"])) < 8) {
                $analise = "<p align=center>Sua senha deve conter no mínimo 8 caracteres!</p>";
            } else {
                $analise = "<p align=center>Informações: OK!</p>";
                
                // Inserção no banco de dados
                $sql = "INSERT INTO usuario (nome, dt_nasc, email, senha) VALUES (?, ?, ?, ?)";
                
                $stmt = $connection->prepare($sql);
                
                $stmt->bindParam(1, $_POST["nome"]);
                $stmt->bindParam(2, $_POST["dtNascimento"]);
                $stmt->bindParam(3, $_POST["email"]);
                $stmt->bindParam(4, $_POST["senha"]);
                
                $stmt->execute();
            }
            
            echo "<p align=center>".$analise."</p>";
            echo "<br><p align=center><a href=login.php>Vamos ao seu primeiro login?</a></p>";
            echo "<br><p align=center><a href=index.php>Início</a></p>";
        ?>
    </body>
</html>