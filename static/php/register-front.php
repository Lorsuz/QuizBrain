<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta http-equiv=”Content-Type” content=”text/html; charset=utf-8?>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="../css/cadastro.css">
        <title>Cadastro</title>
    </head>

    <body class="bg-fundosite text-light">
        <div class="container">
            <form action="register-back.php" method="POST">
                <div id="cadastro">
                    

                    <h1 id="cadastro_titulo" class="font-sigmar">Cadastro</h1>

                    <?php
                    $teste = 'usuario_existe';
                    if (isset($_SESSION['usuario_existe']))
                    {
                    ?>
                        <div id="cadastro_erro" class="font-sigmar">
                            <p>ERRO: Usuário ou senha já estão sendo utilizados.</p>
                        </div>
                    <?php
                    }
                    unset($_SESSION['usuario_existe']);
                    ?>

                    <input name="usuario" class="cadastro_input" type="text" required placeholder="Nome"><br><br>
                    <input name="senha" class="cadastro_input" type="password" required placeholder="Senha"><br><br>
                    <button type="submit" id="cadastro_botao">Cadastrar-se</button>

                    <div class="mt-4 float-end">
                        <a class="link-light" href="login-front.php">Já possui uma conta?</a>
                    </div>

                    <?php
                    if (isset($_SESSION['status_cadastro']))
                    {
                    ?>
                        <div id="cadastro_sucesso" class="font-sigmar">
                            <p>Cadastro feito com sucesso! Para logar-se clique no <a href="login-front.php">link</a></p>
                        </div>
                    <?php
                    }
                    unset($_SESSION['status_cadastro']);
                    ?>
                </div>
            </form>
        </div>
    </body>
</html>