<?php
session_start();
require 'db.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styleQst.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <title>Questionário - VMH</title>
</head>
<body>

    <header><img src="assets/Logo.png" alt=""></header>
    <hr>

    <form>
        <div class="Questao">
            <div class="texto">
                <p>1. Sim, não ou talvez?</p>
            </div>

            <div class="alternativas">
                <input type="radio" id="Sim" name="questao1" value="sim"> 
                <label for="Sim">Sim</label>

                <input type="radio" id="Nao" name="questao1" value="nao"> 
                <label for="Nao">Não</label>

                <input type="radio" id="Talvez" name="questao1" value="talvez"> 
                <label for="Talvez">Talvez</label>
            </div>
        </div>  

        <div class="Questao">
            <div class="texto">
                <p>2. Sim, não ou talvez?</p>
            </div>

            <div class="alternativas">
                <input type="radio" id="Sim" name="questao2" value="sim"> 
                <label for="Sim">Sim</label>

                <input type="radio" id="Nao" name="questao2" value="nao"> 
                <label for="Nao">Não</label>

                <input type="radio" id="Talvez" name="questao2" value="talvez"> 
                <label for="Talvez">Talvez</label>
            </div>
        </div>  

        <div class="Questao">
            <div class="texto">
                <p>3. Sim, não ou talvez?</p>
            </div>

            <div class="alternativas">
                <input type="radio" id="Sim" name="questao3" value="sim"> 
                <label for="Sim">Sim</label>

                <input type="radio" id="Nao" name="questao3" value="nao"> 
                <label for="Nao">Não</label>

                <input type="radio" id="Talvez" name="questao3" value="talvez"> 
                <label for="Talvez">Talvez</label>
            </div>
        </div>  

        <div class="Questao">
            <div class="texto">
                <p>4. Sim, não ou talvez?</p>
            </div>

            <div class="alternativas">
                <input type="radio" id="Sim" name="questao4" value="sim"> 
                <label for="Sim">Sim</label>

                <input type="radio" id="Nao" name="questao4" value="nao"> 
                <label for="Nao">Não</label>

                <input type="radio" id="Talvez" name="questao4" value="talvez"> 
                <label for="Talvez">Talvez</label>
            </div>
        </div>  

        <div class="Questao">
            <div class="texto">
                <p>5. Sim, não ou talvez?</p>
            </div>

            <div class="alternativas">
                <input type="radio" id="Sim" name="questao5" value="sim"> 
                <label for="Sim">Sim</label>

                <input type="radio" id="Nao" name="questao5" value="nao"> 
                <label for="Nao">Não</label>

                <input type="radio" id="Talvez" name="questao5" value="talvez">
                <label for="Talvez">Talvez</label>
            </div>
        </div>  
    </form>
    
</body>
</html>