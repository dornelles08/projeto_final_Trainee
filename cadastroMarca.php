<?php
session_start();
?>

<html>
<head>
    <meta charset="UTF-8">
    <title>Cadastro de Marca</title>
</head>
<body>
<form method="POST" action="../controllers/proc_cadastro.php?tabela=marca">
    Nome: <input type="text" name="nome"> <br><br>
    <input type="submit" name="cadastrar" value="Cadastrar">
</form>
</body>
</html>