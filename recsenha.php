<?php
session_start();
require 'db.php';
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Início</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>

<body>

    <div class="container_total">
        <div class="cont_esq">
            <div class="form">

                <img src="assets/PIT_LOGO.png" alt="" id="Logo" width="300px">

                <form action="code.php" method="post">

                    <div id="botoesDiv">
                        <a class="botoes" href="inde.php" id="btnLoginIndex" onclick="mudarCor('btnLogin')">Recuperação</a>
                    </div>

                    <div class="email-container">
                        <input type="email" name="email" id="" placeholder="Email">
                        <img class="img-input" src="https://www.svgrepo.com/show/502648/email.svg" width="30" alt="">
                    </div>

                    <div class="email-container">
                        <input type="password" name="" id="" placeholder="Senha">
                        <img class="img-input" src="https://www.svgrepo.com/show/510035/key.svg" width="30" alt="">
                    </div>

                    <div class="email-container">
                        <input type="password" name="senha" id="" placeholder="Nova Senha">
                        <img class="img-input" src="https://www.svgrepo.com/show/510035/key.svg" width="30" alt="">
                    </div>

                    <input class="button" name="recsenha" type="submit" value="Enviar">
                </form>

                <a href="index.php" id="logout">Voltar</a>

            </div>
        </div>
        <div class="cont_dir"> <img src="" alt=""></div>
    </div>

    <script src=""></script>
</body>

</html>