<?php 
    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $banco = "site";
    $conexao = new PDO("mysql:host=$servidor;dbname=$banco", $usuario, $senha);

    $nome = $_GET['nome'];
    $email = $_GET['email'];
    $senha = $_GET['senha'];

    $comandoInsert = "INSERT INTO `usuarios` (`nome`, `email`, `senha`) VALUES('$nome', '$email', '$senha')";

    $linhas = $conexao->exec($comandoInsert);   

    if($linhas == 1) {
        echo "salvo";
    } else {
        echo "erro";
    }

    $conexao = null;

?>