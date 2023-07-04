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
    <title>Início - VMH</title>
    <link rel="stylesheet" href="styleinicio.css">
</head>
<body>

    <div id="AreaBranca">
        <button id="botao"> Iniciar Questionário</button>   
        
    </div>
    
    <div id="AreaBranca">

    <a href="feedback.php">
    
    <button class="button" data-text="Awesome">
    <span class="actual-text">&nbsp;FeedBack&nbsp;</span>
    <span aria-hidden="true" class="front-text">&nbsp;FeedBack&nbsp;</span>
</button>
    </a>
    </div>

    <div id="background"></div>

</body>
</html>