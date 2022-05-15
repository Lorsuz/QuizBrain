<?php
include("connect.php");
include("login-verify.php");
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ranking</title>
</head>

<body>
    <h1>Ranking!</h1>
    <div>
        <p>
            <?php
            $rank = mysqli_query($mysqli, "SELECT nome_usu, Pontuacao FROM pontuacao ORDER BY Pontuacao DESC");
            $i = 0;
            while ($row_rank = mysqli_fetch_assoc($rank))
            {
                $i++;
                echo $i . "º";
                echo $row_rank['nome_usu'] . "/";
                echo $row_rank['Pontuacao'];
                echo "<br>";
            }
            ?>
        </p>
    </div>
</body>

</html>