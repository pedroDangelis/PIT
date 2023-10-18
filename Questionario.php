<?php
session_start();
require 'db.php';

if (isset($_POST['enviaqst'])) {
    $qst1 = $_POST['questao1'];
    $qst2 = $_POST['questao2'];
    $qst3 = $_POST['questao3'];
    $qst4 = $_POST['questao4'];
    $qst5 = $_POST['questao5'];

    $query = "INSERT INTO questionario VALUES ('$qst1', '$qst2','$qst3','$qst4','$qst5')";

    // $query_run = mysqli_query($con, $query);
    $stmt = $PDO->prepare($query);

    $result = $stmt->execute();

    if ($result) {
        header("Location: apoio.php");
        exit(0);
    } else {
        echo 'erro ao enviar o questionário';
        exit(0);
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styleQuestionario.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <title>Questionário - VMH</title>
</head>

<body>

    <header>
        <div class="logo"><img src="./logo.png" alt=""></div>
        <div class="nav-bar">
            <ul class="nav-list">
                <li class="list"><a class="nav" href="inicio.php">Home</a></li>
                <li class="list"><a class="nav" href="index.php">Log IN</a></li>
                <li class="list"><a class="nav" href="Cadastro.php">Sign UP</a></li>
            </ul>
        </div>
    </header>

    <form method='POST'>
        <div class="container">
        <div class="Questao">
            <div class="texto">
                <p>1. Você tem se sentido constantemente triste, desanimado ou sem interesse nas coisas que costumava gostar?</p> <br>
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

            <input type="submit" style="background-color: #326DC5;
                border-radius: 10px;
                padding: 20px 160px;
                border: none;
                cursor: pointer;
                transition: 0.3s;
                color: white;
                font-size: 18px;
                font-weight: 600;
                margin-top: 100px;" value="Enviar" name='enviaqst' id='enviaqst' 
            />

        </div>    
        </div>
        

    </form>

</body>

</html>