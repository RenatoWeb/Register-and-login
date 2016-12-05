<html lang="pt-br">
    <head>
        <title>Cadastro - PHP7</title>
        <meta charset="utf-8" />
        <link rel="stylesheet" type="text/css" href="css/style.css" />
    </head>
    <body class="second">
        <h1 class="h1">Cadastro</h1>
        <div class="back">
            <a href="index.php">Voltar</a>
        </div>
        <form method="POST" action="tratamento.php">
            <input type="text" name="nome" id="nome" placeholder="  Nome"/> <br><br>
            <input type="date" name="dtNascimento" id="dtNascimento" /> <br><br>
            <input type="email" name="email" id="email" placeholder="  nome@mail.com" /> <br><br>
            <input type="password" name="senha" id="senha" placeholder="  Digite sua senha" /> <br><br>
            <input type="submit" name="send" id="botao" />
        </form>
        <?php
            include "conexao.php";
        ?>
    </body>
</html>