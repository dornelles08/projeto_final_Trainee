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
    require_once ("../persistencias/persistenciaModelo.php");
    $modelo = new Modelo($_GET['id'], "", "", "");
    $modelo = persistenciaModelo::buscar($modelo);
?>
<form method="POST" action="../controllers/proc_editar.php?tabela=modelo">
    <input type="hidden" name="id" value="<?php echo $modelo->getIdModelo() ?>">
    Descrição: <input type="text" name="descricao" value="<?php echo $modelo->getDescricao() ?>"> <br>
    Potência: <input type="text" name="potencia" value="<?php echo $modelo->getPotencia() ?>"> <br>
    Marca:
    <select name="marca">

        <?php
        require_once ("../persistencias/persistenciaMarca.php");
        require_once ("../models/Marca.php");
        $marcas = new persistenciaMarca();
        if($marcas->listar() != null){
            $array = $marcas->listar();
            foreach ($array as $marca){
                $id = $marca->getIdMarca();
                $nome = $marca->getNome();
                echo "<option value=\"$id\"> $nome </option>";
            }
        }?>

    </select><br><br>
    <input type="submit" name="atualizar" value="Atualizar">
</form>
</body>
</html>