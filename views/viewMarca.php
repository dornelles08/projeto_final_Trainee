<html>
    <head>
        <meta charset="UTF-8">
        <title>Tabela Marcas</title>
    </head>

    <body>
        <a href="../recursos/cadastroMarca.php">Cadastrar</a>
        <table border="2">
            <tr>
                <td> Id Marcas</td>
                <td> Nome Marcas </td>
                <td colspan="2"> Ações </td>
            </tr>
            <?php
                require_once ("../persistencias/persistenciaMarca.php");
                require_once ("../models/Marca.php");
                $marcas = new persistenciaMarca();
                if($marcas->listar() != null){
                    foreach ($marcas->listar() as $marca){ ?>
                        <tr>
                            <td><?php echo $marca->getIdMarca() ?></td>
                            <td><?php echo $marca->getNome() ?></td>
                            <td><?php echo "<a href='../recursos/editarMarca.php?id=". $marca->getIdMarca() ."'>Editar</a>" ?></td>
                            <td><?php echo "<a href='../controllers/acoes.php?acao=deletar&tabela=marca&id=". $marca->getIdMarca() . "'>Deletar</a>" ?></td>
                        </tr>
                    <?php }
                }?>

        </table>
        <a href="../recursos/paginaAdmin.php">Voltar</a>
    </body>
</html>