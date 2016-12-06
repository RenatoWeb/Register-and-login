<?php include "conexao.php"; ?>
<html lang="pt-br">
    <head>
        <title>Login</title>
        <meta charset="utf-8" />
        <link rel="stylesheet" type="text/css" href="css/style.css" />
    </head>
    <body class="thrid">
        <h1>Login</h1>
        <form method="post" action="autenthication.php">
            <input type="email" name="login" id="login" placeholder=" E-mail" /> <br><br>
            <input type="password" name="senha" id="senha" placeholder="Senha" /> <br><br>
            <input type="submit" name="logar" id="logar" value="Entrar" />
        </form>
        <div class="back">
            <a href="index.php" class="back">Voltar</a>
        </div>
    </body>
</html>