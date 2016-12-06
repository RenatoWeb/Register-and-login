<html lang="pt-br">
    <head>
        <title>Autenticação</title>
        <meta charset="utf-8" />
    </head>
    <body>
    <?php
        include "conexao.php";

        $login = isset($_POST['login']) ? $_POST['login'] : '';
        $senha = isset($_POST['senha']) ? $_POST['senha'] : '';

        if (empty($login) || empty($senha)) {
            echo "Informe login e/ou senha!";
            exit();
        }

           
        $query = "SELECT id, nome FROM usuario WHERE email = :login AND senha = :senha"; 
        
        // Preparando statement
        $stmt = $connection->prepare($query);

        $stmt->bindParam(':login', $login); 
        $stmt->bindParam(':senha', $senha); 
        
        // Executando statement 
        $stmt->execute(); 
        
        // Obter linha consultada 
        $users = $stmt->fetchAll(PDO::FETCH_ASSOC); 
        
        // Se a linha existe: indicar que esta logado e encaminhar para outro lugar 
        if (count($users) <= 0) {
            echo "E-mail e/ou senha incorretos!";
            exit;
        } 

        // Pega o primeiro usuário
        $user = $users[0];

        session_start();
        $_SESSION['logged'] = true;
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['user_name'] = $user['nome'];
        
        header('Location: restricted.php');
    ?>
    </body>
</html>