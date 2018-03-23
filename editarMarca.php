<?php
session_start();
?>

<html>
<head>
    <meta charset="UTF-8">
    <title>Cadastro de Marca</title>
</head>
<body>
<?php
    require_once ("../persistencias/persistenciaMarca.php");
    $marca = new Marca($_GET['id'], "");
    $marca = persistenciaMarca::buscar($marca);
?>
<form method="POST" action="../controllers/proc_editar.php?tabela=marca">
    ID: <label name="id"><?php echo $marca->getIdMarca() ?></label> <br>
    Nome: <input type="text" name="nome" value="<?php echo $marca->getNome()?>"> <br><br>
    <input type="submit" name="atualizar" value="Atualizar">
</form>
</body>
</html>