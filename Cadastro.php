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
                <form action="code.php" method="post">

                    <img src="assets/PIT_LOGO.png" alt="" id="Logo" width="300px">

                    <div id="botoesDiv">
                        <a class="botoes" href="index.php" id="btnLoginCadastro" onclick="mudarCor('btnLogin')">Entrar</a>
                        <a class="botoes" href="Cadastro.php" id="btnCadastroCadastro" onclick="mudarCor('btnCadastro')">Cadastrar</a>
                    </div>

                    <div class="email-container">
                        <input type="email" name="email" id="" placeholder="Email">
                        <img class="img-input" src="https://www.svgrepo.com/show/502648/email.svg" width="30" alt="">
                    </div>

                    <div class="email-container">
                        <input type="text" name="nome" id="" placeholder="Nome">
                        <img class="img-input" src="https://cdn.icon-icons.com/icons2/3449/PNG/512/account_member_profile_people_avatar_personal_user_icon_219331.png" width="30" alt="">
                    </div>

                    <div class="email-container">
                        <input type="number" name="telemovel" id="" placeholder="(00) 0000-0000">
                        <img class="img-input" src="https://cdn.icon-icons.com/icons2/3449/PNG/512/cellular_service_telephone_support_phone_communication_call_icon_219309.png" width="30" alt="">
                    </div>

                    <div class="email-container">
                        <input type="text" name="rg" id="" placeholder="RG">
                        <img class="img-input" src="https://cdn.icon-icons.com/icons2/3790/PNG/512/pass_badge_identification_profile_identity_id_card_icon_232651.png" width="30" alt="">
                    </div>

                    <div class="email-container">
                        <input type="password" name="senha" id="" placeholder="Senha">
                        <img class="img-input" src="https://www.svgrepo.com/show/510035/key.svg" width="30" alt="">
                    </div>

                    <input class="button" name="cadastrar" type="submit" value="Cadastrar">
                </form>
                <br>
                <div id="linha"></div>
                <a href="recsenha.php">
                    <p id="eSenha">Esqueci a senha</p>
                </a>
                <br><br>

                <div class="iconsCadastro">

                    <a href="">
                        <div class="logos"><img src="https://logopng.com.br/logos/google-37.png" width="30px" height="30px" alt="" id="google"></div>
                    </a>
                    <a href="">
                        <div class="logos"><img src="https://logospng.org/download/apple/logo-apple-4096.png" width="30px" height="30px" alt="" id="apple"></div>
                    </a>
                    <a href="">
                        <div class="logos"><img src="https://logodownload.org/wp-content/uploads/2014/09/facebook-logo-0.png" width="30px" height="30px" alt="" id="facebook"></div>
                    </a>

                </div>

                <a href="CadastroMedico.php" id="parceiro">Seja um médico parceiro</a>

                <a href="" id="logout" style="padding-left: 3em">Logout</a>

            </div>
        </div>
        <div class="cont_dir"> <img src="" alt=""></div>
    </div>

    <script src="index.js"></script>
</body>

</html>