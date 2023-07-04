<?php
session_start();
require 'db.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Início - VMH</title>
    <link rel="stylesheet" href="stylesInicio.css">
</head>
<body>

    <div id="AreaBranca">
        <button id="botao"> Iniciar Questionário</button>   
        
    </div>
    
    <a href="feedback.php" id="feedback">Feedback</a>

    <div id="background"></div>

</body>
</html>