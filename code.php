<?php
session_start();
require 'db.php';
/* 
if (isset($_POST['cadastrar'])) {
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    echo $email;

    $query = "INSERT INTO usuario (email, senha) VALUES ('$email', '$senha')";

    $query_run = mysqli_query($con, $query);

    if ($query_run) {
        echo 'usuario cadastrado';
        header("Location: index.php");
        exit(0);
    } else {
        echo 'erro ao criar o usuario';
        header("Location: index.php");
        exit(0);
    }
}
 */


if (isset($_POST['cadastrar'])) {
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $nome = $_POST['nome'];
    $rg = $_POST['rg'];
    $telemovel = $_POST['telemovel'];
    $crp = $_POST['crp'];
    $lugar = $_POST['lugar'];

    echo $email;

    $query = "INSERT INTO usuario (email, senha, nome, rg, telemovel, crp, lugar) VALUES ('$email', '$senha','$nome','$rg','$telemovel','$lugar','$crp')";

    $query_run = mysqli_query($con, $query);

    if ($query_run) {
        echo 'usuario cadastrado';
        header("Location: cadastro.php");
        exit(0);
    } else {
        echo 'erro ao criar o usuario';
        header("Location: cadastro.php");
        exit(0);
    }
}

