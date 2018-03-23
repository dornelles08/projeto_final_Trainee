<?php
/**
 * Created by PhpStorm.
 * User: liped
 * Date: 20/03/2018
 * Time: 18:36
 */

require_once 'Dao.php';
require_once 'ConexaoBD.php';
require_once ("../models/Marca.php");

class persistenciaMarca implements Dao
{

    function cadastrar($objeto)
    {
        $pdo= ConexaoBD::conectar();

        $sql = 'INSERT INTO Marca VALUES (:nome);';

        $statement = $pdo->prepare($sql);

        $statement->bindValue(':nome', $objeto->getNome(), PDO::PARAM_STR);

        $statement->execute();
    }

    function editar($objeto)
    {
        $pdo = ConexaoBD::conectar();

        $sql = 'UPDATE Marca SET nome = :nome WHERE idMarca = :idMarca;';

        $statement = $pdo->prepare($sql);
        $statement->bindValue(':idMarca', $objeto->getIdMarca(), PDO::PARAM_STR);
        $statement->bindValue(':nome', $objeto->getNome(), PDO::PARAM_STR);

        $statement->execute();
    }

    function excluir($objeto)
    {
        $pdo = ConexaoBD::conectar();

        $sql= 'DELETE FROM Marca WHERE idMarca = :idMarca;';

        $statement = $pdo->prepare($sql);

        $statement->bindValue(':idMarca', $objeto->getIdMarca(), PDO::PARAM_STR);

        $statement->execute();
    }

    function buscar($objeto)
    {
        $pdo = ConexaoBD::conectar();

        $sql = 'SELECT idMarca, nome FROM Marca WHERE idMarca = :idMarca;';

        $statement = $pdo->prepare($sql);

        $statement->bindValue(':idMarca', $objeto->getIdMarca(), PDO::PARAM_STR);

        $statement->execute();

        $resultado = $statement->fetch(PDO::FETCH_ASSOC);
        if($resultado != false && !empty($resultado))
            $resultado = new Marca($resultado['idMarca'], $resultado['nome']);
        else
            $resultado = null;

        return $resultado;

    }

    function listar()
    {
        $pdo = ConexaoBD::conectar();

        $sql = 'SELECT idMarca as Id, nome as NomeMarca FROM Marca;';

        $statement = $pdo->query($sql);

        $resultado = null;

        if($statement!=false && !empty($statement))
            foreach ($statement as $linha)
                $resultado[] = new Marca($linha['Id'], $linha['NomeMarca']);

        return $resultado;
    }
}