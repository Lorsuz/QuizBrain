<?php
include("connect.php");
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <div>
    <h1>Puzzle Brain</h1ass=>
    <div>
      <div>
        <p>
          <?php
          $dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);
          var_dump($dados);

          $query_pergunta = ("SELECT idPerguntas, Perguntas FROM perguntas ORDER BY RAND() LIMIT 1");
          $resultado_pergunta = mysqli_query($mysqli, $query_pergunta);
          $row_pergunta = mysqli_fetch_assoc($resultado_pergunta);
          echo $row_pergunta['Perguntas'];
          ?>
        </p>
      </div>
      <form action="" method="POST">
        <div data-toggle="buttons">
          <label>
            <input type="radio" name="resp1" value="Alternativa1" onClick="ativaOpcao()" id="option1" autocomplete="off">
            <?php
            $query_resposta1 = ("SELECT Alternativa1 FROM perguntas WHERE idPerguntas = " . $row_pergunta['idPerguntas']);
            $resultado_resposta1 = mysqli_query($mysqli, $query_resposta1);
            $row_resposta1 = mysqli_fetch_assoc($resultado_resposta1);
            echo $row_resposta1['Alternativa1'];
            ?>
          </label>
          <label>
            <input type="radio" name="resp2" value="Alternativa2" onClick="ativaOpcao()" id="option2" autocomplete="off">
            <?php
            $query_resposta2 = ("SELECT Alternativa2 FROM perguntas WHERE idPerguntas = " . $row_pergunta['idPerguntas']);
            $resultado_resposta2 = mysqli_query($mysqli, $query_resposta2);
            $row_resposta2 = mysqli_fetch_assoc($resultado_resposta2);
            echo $row_resposta2['Alternativa2'];
            ?>
          </label>
          <label >
            <input type="radio" name="resp3" value="Alternativa3" onClick="ativaOpcao()" id="option3" autocomplete="off">
            <?php
            $query_resposta3 = ("SELECT Alternativa3 FROM perguntas WHERE idPerguntas = " . $row_pergunta['idPerguntas']);
            $resultado_resposta3 = mysqli_query($mysqli, $query_resposta3);
            $row_resposta3 = mysqli_fetch_assoc($resultado_resposta3);
            echo $row_resposta3['Alternativa3'];
            ?>
          </label>
          <label >
            <input type="radio" name="resp4" value="Alternativa4" onClick="ativaOpcao()" id="option4" autocomplete="off">
            <?php
            $query_resposta4 = ("SELECT Alternativa4 FROM perguntas WHERE idPerguntas = " . $row_pergunta['idPerguntas']);
            $resultado_resposta4 = mysqli_query($mysqli, $query_resposta4);
            $row_resposta4 = mysqli_fetch_assoc($resultado_resposta4);
            echo $row_resposta4['Alternativa4'];
            ?>
          </label>
        </div>
        <div>
          <button type="submit" value="enviar" name="valresposta">Responder</button>

          <button ><a href="start.html">Menu</a></button>
          <button ><a href="logout.php">Sair</a></button>
        </div>
        <div>
        </div>
      </form>
    </div>
  </div>
</body>

</html>