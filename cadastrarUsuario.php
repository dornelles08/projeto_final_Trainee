<?php
    session_start();
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Cadastro de Usuario</title>
    </head>
    <body>
        <form method="POST" action="../controllers/proc_cadastro.php?tabela=usuario">
            Nome: <input type="text" name="nome"> <br><br>
            CPF: <input type="text" name="cpf"> <br><br>
            Tel: <input type="text" name="telefone"> <br><br>
            E-mail: <input type="email" name="email"> <br><br>
            Login: <input type="text" name="login"> <br><br>
            Senha: <input type="password" name="senha"> <br><br>
            <input type="submit" name="cadastrar" value="Cadastrar">
        </form>
    </body>
</html>