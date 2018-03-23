<?php
session_start();
?>
<html>
<head>
    <meta charset="UTF-8">
    <title>Cadastro Marca</title>
</head>

<body>
<?php
    require_once ("../persistencias/persistenciaAutomovel.php");
    $automovel = new Automovel($_GET['id'],"", "", "", "", "", "");
    $automovel = persistenciaAutomovel::buscar($automovel);
?>
<form method="POST" action="../controllers/proc_editar.php?tabela=automovel">
    ID: <label name="id"> <?php echo $automovel->getIdAutomovel() ?> </label> <br>
    Modelo: <select name="modelo">

        <?php
        require_once ("../persistencias/persistenciaModelo.php");
        require_once ("../models/Modelo.php");
        $modelos = new persistenciaModelo();
        if($modelos->listar() != null){
            $array = $modelos->listar();
            foreach ($array as $modelo){
                $id = $modelo->getIdModelo();
                $nome = $modelo->getDescricao();
                echo "<option value=\"$id\"> $nome </option>";
            }
        }?>

    </select><br>
    Ano de Fabricação: <input type="number" name="ano_fabricacao" value="<?php echo $automovel->getAnoFabricacao() ?>"> <br>
    Ano do Modelo: <input type="number" name="ano_modelo" value="<?php echo $automovel->getAnoModelo()?>"> <br>
    Observações: <input type="text" name="observacoes" value="<?php echo $automovel->getObservacoes()?>"> <br>
    Preço: <input type="number" name="preco" value="<?php echo $automovel->getPreco()?>"> <br>
    Kilonetragem: <input type="number" name="kilometragem" value="<?php echo $automovel->getKilometragem()?>"> <br><br>

    <input type="submit" name="atualizar" value="Atualizar">
</form>
</body>
</html>