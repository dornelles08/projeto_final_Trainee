<html>
<head>
    <meta charset="UTF-8">
    <title>Tabela Marcas</title>
</head>

<body>
<a href="../recursos/cadastrarAutomovel.php">Cadastrar</a>
<table border="2">
    <tr>
        <td>Id</td>
        <td>Modelo</td>
        <td>Ano de Fabricação</td>
        <td>Ano de Modelo</td>
        <td>Observações</td>
        <td>Preço</td>
        <td>Kilometragem</td>
        <td colspan="2">Ações</td>
    </tr>

    <?php
    require_once ("../persistencias/persistenciaAutomovel.php");
    require_once ("../models/Automovel.php");
    $automoveis = new persistenciaAutomovel();
    if($automoveis->listar() != null){
        foreach ($automoveis->listar() as $automovel){ ?>
            <tr>
                <td><?php echo $automovel->getIdAutomovel() ?></td>
                <td><?php echo $automovel->getModelo() ?></td>
                <td><?php echo $automovel->getAnoFabricacao() ?></td>
                <td><?php echo $automovel->getAnoModelo() ?></td>
                <td><?php echo $automovel->getObservacoes() ?></td>
                <td><?php echo $automovel->getPreco() ?></td>
                <td><?php echo $automovel->getKilometragem() ?></td>
                <td><?php echo "<a href='../recursos/editarAutomovel.php?id=". $automovel->getIdAutomovel() ."'>Editar</a>" ?></td>
                <td><?php echo "<a href='../controllers/acoes.php?acao=deletar&tabela=automovel&id=". $automovel->getIdAutomovel() . "'>Deletar</a>"  ?></td>


            </tr>
        <?php }
    }?>

</table>
<a href="../recursos/paginaAdmin.php">Voltar</a>
</body>
</html>