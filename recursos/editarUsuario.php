<?php
    session_start();
?>

<html>
<head>
    <meta charset="UTF-8">
    <title>Cadastro de Usuario</title>
</head>
<body>
<?php
    require_once ("../persistencias/persistenciaUsuario.php");
    $usuario = new Usuario("", "", "", "", $_GET['login'], $_GET['senha'], false);
    $usuario = persistenciaUsuario::buscar($usuario);
?>
<form method="POST" action="../controllers/proc_editar.php?tabela=usuario">
    Nome: <input type="text" name="nome" value="<?php echo $usuario->getNome() ?>"> <br><br>
    CPF: <input type="text" name="cpf" value="<?php echo $usuario->getCpf()?>"> <br><br>
    Tel: <input type="text" name="telefone" value="<?php echo $usuario->getTelefone() ?>"> <br><br>
    E-mail: <input type="email" name="email" value="<?php echo $usuario->getEmail() ?>"> <br><br>
    Login: <input type="text" name="login" value="<?php echo $usuario->getLogin() ?>"> <br><br>
    Senha: <input type="password" name="senha" value="<?php echo $usuario->getSenha() ?>"> <br><br>
    Admin: <input type="radio" name="admin" value="true"> True <input type="radio" name="admin" value="false"> False <br>
    <input type="submit" name="atualizar" value="Atualizar">
</form>
</body>
</html>