<?php
session_start();
require 'db.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quem Somos - VMH</title>
    
    <link rel="stylesheet" href="page.css">
</head>
<body>

    <div id="AreaBranca">

        <a href="feedback.php" class="a2">
            <button class="button" data-text="Awesome">
                <span class="actual-text">&nbsp;FeedBack&nbsp;</span>
                <span aria-hidden="true" class="front-text">&nbsp;FeedBack&nbsp;</span>
            </button>
        </a>

    </div>


    <a class="azin" href="landingpage.php">
        <button class="button" data-text="Awesome">
            <span class="actual-text">&nbsp;Sobre&nbsp;</span>
            <span aria-hidden="true" class="front-text">&nbsp;Sobre&nbsp;</span>
        </button>
    </a>


    <a href="inicio" class="a3">
        <button class="button" data-text="Awesome">
            <span class="actual-text">&nbsp;Voltar&nbsp;</span>
            <span aria-hidden="true" class="front-text">&nbsp;Voltar&nbsp;</span>
        </button>
    </a>

    <div id="AreaBranca">
        <h1>Quem somos Nós</h1>
    </div>
    
    <div id="background"></div>

</body>
</html>