<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset=utf-8?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" href="../css/login.css"/>
    <title>Login</title>
</head>

<body>
    <div>

        <form action="login-back.php" method="POST">
            <div id="login">
                <h1 id="login_titulo">Login</h1>

                <?php
                if (isset($_GET['erro']))
                {
                    if ($_GET['erro'] == "dadoserrado")
                    {
                ?>
                        <div id="login_erro">
                            <p>ERRO: Usu�rio ou senha inv�lidos.</p>
                        </div>
                <?php
                    }
                }
                unset($_GET['erro']);
                ?>

                <input name="usuario" class="login_input" type="text" placeholder="Nome"><br><br>
                <input name="senha" class="login_input" type="password" placeholder="Senha"><br><br>
                <button type="submit" id="login_botao">Logar-se</button>

                <div>
                    <a href="register-front.php">Quer se cadastrar?</a>
                </div>
        </form>
    </div>
    </div>
</body>

</html>