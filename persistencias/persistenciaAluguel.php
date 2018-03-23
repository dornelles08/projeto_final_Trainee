<?php
/**
 * Created by PhpStorm.
 * User: liped
 * Date: 22/03/2018
 * Time: 15:28
 */

require_once 'Dao.php';
require_once 'ConexaoBD.php';
require_once '../models/Aluguel.php';

class persistenciaAluguel implements Dao
{

    function cadastrar($objeto)
    {
        $pdo = ConexaoBD::conectar();

        $sql = 'INSERT INTO Aluguel VALUES (:cliente, :automovel, :valor, :dataAluguel, :multa, :dataDevolucao);';

        $statement = $pdo->prepare($sql);

        $statement->bindValue(':cliente', $objeto->getCliente(), PDO::PARAM_STR);
        $statement->bindValue(':automovel', $objeto->getAutomovel(), PDO::PARAM_STR);
        $statement->bindValue(':valor', $objeto->getValor(), PDO::PARAM_STR);
        $statement->bindValue(':dataAluguel', $objeto->getDataAluguel(), PDO::PARAM_STR);
        $statement->bindValue(':multa', $objeto->getMulta(), PDO::PARAM_STR);
        $statement->bindValue(':dataDevolucao', $objeto->getDataDevolucao(), PDO::PARAM_STR);

        $statement->execute();
    }

    function editar($objeto)
    {
        $pdo = ConexaoBD::conectar();

        $sql = 'UPDATE Aluguel SET cliente = :cliente, automovel = :automovel, valor = :valor, dataAluguel = :dataAluguel, multa = :multa, dataDevolucao = :dataDevolucao WHERE idAlugue = :idAluguel;';

        $statement = $pdo->prepare($sql);

        $statement->bindValue(':idAluguel', $objeto->getIdAluguel(), PDO::PARAM_STR);
        $statement->bindValue(':cliente', $objeto->getCliente(), PDO::PARAM_STR);
        $statement->bindValue(':automovel', $objeto->getAutomovel(), PDO::PARAM_STR);
        $statement->bindValue(':valor', $objeto->getValor(), PDO::PARAM_STR);
        $statement->bindValue(':dataAluguel', $objeto->getDataAluguel(), PDO::PARAM_STR);
        $statement->bindValue(':multa', $objeto->getMulta(), PDO::PARAM_STR);
        $statement->bindValue(':dataDevolucao', $objeto->getDataDevolucao(), PDO::PARAM_STR);

        $statement->execute();
    }

    function excluir($objeto)
    {
        $pdo = ConexaoBD::conectar();

        $sql = 'DELETE FROM Aluguel WHERE idAlugel = :idAluguel;';

        $statement = $pdo->prepare($sql);
        $statement->bindValue(':idAluguel', $objeto->getIdAluguel(), PDO::PARAM_STR);

        $statement->execute();

    }

    function buscar($objeto)
    {
        $pdo = ConexaoBD::conectar();

        $sql = 'SELECT * FROM Aluguel WHERE idAluguel = :idAluguel;';

        $statement = $pdo->prepare($sql);

        $statement->bindValue(':idAluguel', $objeto->getIdAluguel(), PDO::PARAM_STR);

        $statement->execute();

        $resultado = $statement->fetch(PDO::FETCH_ASSOC);

        if($resultado !=false && !empty($resultado))
            $resultado = new Aluguel($resultado['idAluguel'], $resultado['cliente'], $resultado['automovel'], $resultado['valor'], $resultado['dataAluguel'], $resultado['multa'], $resultado['dataDevolucao']);
        else
            $resultado=null;

        return $resultado;
    }

    function listar()
    {
        $pdo = ConexaoBD::conectar();

        $sql = 'SELECT * FROM Aluguel;';

        $statement = $pdo->query($sql);

        $statement = $statement->fetchAll(PDO::FETCH_ASSOC);
        $resultado = null;

        if($statement != false && !empty($statement))
            foreach ($statement as $linha)
                $resultado[] = new Aluguel($linha['idAluguel'], $linha['cliente'], $linha['automovel'], $linha['valor'], $linha['dataAluguel'], $linha['multa'], $linha['dataDevolucao']);


        return $resultado;
    }
}