﻿<?php
include("connect.php");
include("login-verify.php");
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Game End</title>
</head>

<body>
    <h1>O jogo foi finalizado!!</h1>
    <p>
        <?php
        $query_pontos = "SELECT * FROM pontuacao";
        $result_pontos = mysqli_query($mysqli, $query_pontos);
        $row_pontos = mysqli_fetch_assoc($result_pontos);

        echo "Parabéns: " . $_SESSION['usuario'];
        echo "<br><br>Sua pontuação foi de: " . $row_pontos['Pontuacao'];
        ?>
    </p>
</body>

</html>