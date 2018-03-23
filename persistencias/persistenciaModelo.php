<?php
/**
 * Created by PhpStorm.
 * User: liped
 * Date: 20/03/2018
 * Time: 18:36
 */

require_once 'Dao.php';
require_once 'ConexaoBD.php';
require_once '../models/Modelo.php';

class persistenciaModelo implements Dao
{

    function cadastrar($objeto)
    {
        $pdo = ConexaoBD::conectar();

        $sql = 'INSERT INTO Modelo VALUE (:descricao, :potencia, :marca);';

        $statement = $pdo->prepare($sql);

        $statement->bindValue(':descricao', $objeto->getDescricao(), PDO::PARAM_STR);
        $statement->bindValue(':potencia', $objeto->getPotencia(), PDO::PARAM_STR);
        $statement->bindValue(';marca', $objeto->getMarca(), PDO::PARAM_STR);

        $statement->execute();
    }

    function editar($objeto)
    {
        $pdo = ConexaoBD::conectar();

        $sql = 'UPDATE Modelo SET descricao = :descricao, potencia = :potencia, marca = :marca WHERE idModelo = :idModelo;';

        $statement = $pdo->prepare($sql);

        $statement->bindValue(':idModelo', $objeto->getIdModelo(), PDO::PARAM_STR);
        $statement->bindValue(':descricao', $objeto->getDescricao(), PDO::PARAM_STR);
        $statement->bindValue(':potencia', $objeto->getPotencia(), PDO::PARAM_STR);
        $statement->bindValue(';marca', $objeto->getMarca(), PDO::PARAM_STR);

        $statement->execute();
    }

    function excluir($objeto)
    {
        $pdo = ConexaoBD::conectar();

        $sql = 'DELETE FROM Modelo WHERE idModelo = :idModelo;';

        $statement = $pdo->prepare($sql);

        $statement->bindValue(':idModelo', $objeto->getIdModelo(), PDO::PARAM_STR);

        $statement->execute();
    }

    function buscar($objeto)
    {
        $pdo = ConexaoBD::conectar();

        $sql = 'SELECT idModelo, descricao, potencia, marca FROM Modelo WHERE idModelo=:idModelo;';

        $statement = $pdo->prepare($sql);

        $statement->bindValue(':idModelo', $objeto->getIdModelo(), PDO::PARAM_STR);

        $statement->execute();

        $resultado = $statement->fetch(PDO::FETCH_ASSOC);

        if($resultado!=false && !empty($resultado))
            $resultado = new Modelo($resultado['idModelo'], $resultado['descricao'], $resultado['potencia'], $resultado['marca']);
        else
            $resultado=null;

        return $resultado;
    }

    function listar()
    {
        $pdo = ConexaoBD::conectar();

        $sql = 'SELECT mo.idModelo, mo.descricao, mo.potencia, ma.nome FROM Modelo as mo JOIN Marca as ma on(mo.marca = ma.idMarca);';

        $statement = $pdo->query($sql);
        $statement = $statement->fetchAll(PDO::FETCH_ASSOC);

        $resultado = null;

        if($statement!=null && !empty($statement))
            foreach ($statement as $linha)
                $resultado[] = new Modelo($linha['idModelo'], $linha['descricao'], $linha['potencia'], $linha['nome']);

        return $resultado;
    }
}