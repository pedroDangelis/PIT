<?php
session_start();
require 'db.php';
?>
<!DOCTYPE html>
<html lang="PT-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="stylesinicio.css">
</head>
<body>
    <header>
        <div class="logo"><img src="./logo.png" alt=""></div>
        <div class="nav-bar">
            <ul class="nav-list">
                <li class="list"><a class="nav" href="inicio.php">Home</a></li>
                <li class="list"><a class="nav" href="index.php">Logar
                    
                </a></li>
                <li class="list"><a class="nav" href="Cadastro.php">Cadastrar</a></li>
            </ul>
        </div>
    </header>

    <div class="container">
        <div id="cont"> 
            <div class="people">
                <img src="./people.png" alt="">
                <img src="./people.png" alt="">
                <img src="./people.png" alt="">
            </div>
            <h2>Assistência simplificada <br> para todos!</h2>
            <p>uma nova parceria com os melhores <br> profissionais da área.</p>
            <a href="Questionario.php"><button class="BTN">Realize o questionário!</button></a>
            <a id="feedback" href="feedback.php">Deixe seu feedback</a>
        </div>

        <div class="contL">
            <img src="./Woman.png" alt="">
        </div>
    </div>

    <div class="menu-cont">
        <div class="menu">
            <div class="C">
                <h1>+15</h1> <br>
                <h5 class="pC">pacientes atendidos</h5>
            </div>

            <div class="C">
                <h1>+15</h1> <br>
                <h5 class="pC">profissionais parceiros</h5>
            </div> 

            <div class="C">
                <h1>+15</h1> <br>
                <h5 class="pC">casos solucionados</h5>
            </div> 
        </div>
    </div>
</body>
</html>