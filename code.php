<?php
session_start();
require 'db.php';

if (isset($_POST['cadastrar'])) {
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $nome = $_POST['nome'];
    $rg = $_POST['rg'];
    $telemovel = $_POST['telemovel'];

    $query = "INSERT INTO usuario (email, senha, nome, rg, telemovel) VALUES ('$email', '$senha','$nome','$rg','$telemovel')";

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

if (isset($_POST['cadastrarMedico'])) {
    $emailmed = $_POST['EMAILMED'];
    $senhamed = $_POST['senhamed'];
    $crp = $_POST['crp'];
    $local = $_POST['lugar'];

    $query = "INSERT INTO MedicoLogin (EMAILMED, senhamed, crp, lugar) VALUES ('$emailmed', '$senhamed','$crp','$local')";

    // $query_run = mysqli_query($con, $query);
    $stmt = $PDO->prepare($query);

    $result = $stmt->execute();

    if ($result) {
        echo 'usuario cadastrado';
        header("Location: cadastroMedico.php");
        exit(0);
    } else {
        echo 'erro ao criar o usuario';
        header("Location: cadastroMedico.php");
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

        $querySenha = "SELECT senha, admin FROM usuario where email = '$email'";

        $resultSenha = $PDO->query($querySenha);

        $rows = $resultSenha->fetchAll(PDO::FETCH_ASSOC);

        if ($senha == $rows[0]['senha']) {
            if ($rows[0]['admin']) {
                header("Location: admin.php");
            } else {
                header("Location: inicio.php");
            }
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

    $queryEmail = "SELECT email FROM usuario where email = '$email'";

    $result = $PDO->query($queryEmail);


    if (!$result) {
        echo 'Erro ao buscar email';
    }

    $rows = $result->fetchAll(PDO::FETCH_ASSOC);

    print_r($rows);

    if (count($rows) > 0) {
        $querySenha = "UPDATE usuario set senha = '$senha' where email = '$email'";

        $stmt = $PDO->prepare($querySenha);

        $result = $stmt->execute();

        if (!$result) {
            echo 'Ocorreu um erro ao atualizar a senha';
        } else {
            echo 'Senha alterada!';
        }
    } else {
        echo 'Email não cadastrado';
    }
}