<html>
<head>
    <meta charset="UTF-8">
    <title>Tabela Marcas</title>
</head>

<body>
<table border="2">
    <tr>
        <td>Nome</td>
        <td>CPF</td>
        <td>Telefone</td>
        <td>E-mail</td>
        <td>Usuario</td>
        <td>Senha</td>
        <td>IsAmin</td>
        <td colspan="2">Ações</td>
    </tr>

    <?php
    require_once ("../persistencias/persistenciaUsuario.php");
    require_once ("../models/Usuario.php");
    $usuarios = new persistenciaUsuario();
    if($usuarios->listar() != null){
        foreach ($usuarios->listar() as $usuario){ ?>
            <tr>
                <td><?php echo $usuario->getNome() ?></td>
                <td><?php echo $usuario->getCpf() ?></td>
                <td><?php echo $usuario->getTelefone() ?></td>
                <td><?php echo $usuario->getEmail() ?></td>
                <td><?php echo $usuario->getLogin() ?></td>
                <td><?php echo $usuario->getSenha() ?></td>
                <td><?php echo $usuario->getIsAdmin() ?></td>
                <td><?php echo "<a href='../recursos/editarUsuario.php?login=". $usuario->getLogin() ."&senha=".$usuario->getSenha()."'>Editar</a>" ?></td>
                <td><?php echo "<a href='../controllers/acoes.php?acao=deletar&tabela=usuario&id=". $usuario->getCpf() . "'>Deletar</a>"  ?></td>


            </tr>
        <?php }
    }?>

</table>
<a href="../recursos/paginaAdmin.php">Voltar</a>
</body>
</html>