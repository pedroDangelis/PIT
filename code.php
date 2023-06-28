<?php
session_start();
require 'db.php';

if (isset($_POST['cadastrar'])) {
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $nome = $_POST['nome'];
    $rg = $_POST['rg'];
    $telemovel = $_POST['telemovel'];
    $crp = $_POST['crp'];
    $lugar = $_POST['lugar'];

    $query = "INSERT INTO usuario (email, senha, nome, rg, telemovel, crp, lugar) VALUES ('$email', '$senha','$nome','$rg','$telemovel','$lugar','$crp')";

    // $query_run = mysqli_query($con, $query);
    $stmt = $PDO->prepare($query);

    $result = $stmt->execute();

    if ($result) {
        echo 'usuario cadastrado';
        header("Location: cadastro.php");
        exit(0);
    } else {
        echo 'erro ao criar o usuario';
        header("Location: cadastro.php");
        exit(0);
    }
}

if (isset($_POST['entrar'])) {
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $queryEmail = "SELECT email FROM usuario where email = '$email'";

    $result = $PDO->query($queryEmail);


    if (!$result) {
        echo 'Erro ao buscar email';
    }

    $rows = $result->fetchAll(PDO::FETCH_ASSOC);

    if ($rows > 0) {

        $querySenha = "SELECT senha FROM usuario where email = '$email'";

        $resultSenha = $PDO->query($querySenha);

        $rows = $resultSenha->fetchAll(PDO::FETCH_ASSOC);

        print_r($rows);

        if ($senha == $rows[0]['senha']) {
            echo 'Logado com sucesso!';
        } else {
            echo 'A senha está errada';
        }
    } else {
        echo 'Este email não está cadastrado!';
    }
}

if (isset($_POST['recsenha'])) {
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    
}
