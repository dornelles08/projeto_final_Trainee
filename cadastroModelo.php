<?php
    session_start();
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Cadastro Marca</title>
    </head>

    <body>
        <form method="POST" action="../controllers/proc_cadastro.php?tabela=modelo">
            Descrição: <input type="text" name="descricao"> <br>
            Potência: <input type="text" name="potencia"> <br>
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
            <input type="submit" name="cadastrar" value="Cadastrar">
        </form>
    </body>
</html>