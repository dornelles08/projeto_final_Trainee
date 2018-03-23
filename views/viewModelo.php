<html>
<head>
    <meta charset="UTF-8">
    <title>Tabela Marcas</title>
</head>

<body>
<a href="../recursos/cadastroModelo.php">Cadastrar</a>
<table border="2">
    <tr>
        <td>Id</td>
        <td>Descrição</td>
        <td>Potência</td>
        <td>Marca</td>
        <td colspan="2">Ações</td>
    </tr>

    <?php
    require_once ("../persistencias/persistenciaModelo.php");
    require_once ("../models/Modelo.php");
    $modelos = new persistenciaModelo();
    if($modelos->listar() != null){
        foreach ($modelos->listar() as $modelo){ ?>
            <tr>
                <td><?php echo $modelo->getIdModelo() ?></td>
                <td><?php echo $modelo->getDescricao() ?></td>
                <td><?php echo $modelo->getPotencia() ?></td>
                <td><?php echo $modelo->getMarca() ?></td>
                <td><?php echo "<a href='../recursos/editarModelo.php?id=". $modelo->getIdModelo() ."'>Editar</a>" ?></td>
                <td><?php echo "<a href='../controllers/acoes.php?acao=deletar&tabela=modelo&id=". $modelo->getIdModelo() . "'>Deletar</a>"  ?></td>


            </tr>
        <?php }
    }?>

</table>
<a href="../recursos/paginaAdmin.php">Voltar</a>
</body>
</html>