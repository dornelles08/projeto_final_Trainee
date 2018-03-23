<?php
session_start();
?>
<html>
<head>
    <meta charset="UTF-8">
    <title>Cadastro Marca</title>
</head>

<body>
<form method="POST" action="../controllers/proc_cadastro.php?tabela=automovel">
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
    Ano de Fabricação: <input type="number" name="ano_fabricacao"> <br>
    Ano do Modelo: <input type="number" name="ano_modelo"> <br>
    Observações: <input type="text" name="observacoes"> <br>
    Preço: <input type="number" name="preco"> <br>
    Kilonetragem: <input type="number" name="kilometragem"> <br><br>

    <input type="submit" name="cadastrar" value="Cadastrar">
</form>
</body>
</html>