<?php
	// Conexão com BD MySQL
    try {
        $connection = new PDO("mysql:host=localhost;dbname=aprendizado;", "root", "");
        $connection->exec("set names utf8");
    } catch(PDOException $e) {
        echo "Falha: ".$e->getMessage();
        exit();
    }
    // Função para verificar se o usuário está logado
    function logged() {
    	if (!isset($_SESSION['logged']) || $_SESSION['logged'] != true) {
    		return false;
    	}
    	return true;
    }
?>