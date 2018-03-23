<?php
/**
 * Created by PhpStorm.
 * User: liped
 * Date: 20/03/2018
 * Time: 18:37
 */

require_once 'Dao.php';
require_once 'ConexaoBD.php';
require_once '../models/Automovel.php';

class persistenciaAutomovel implements Dao
{

    function cadastrar($objeto)
    {
        $pdo = ConexaoBD::conectar();

        $sql = 'INSERT INTO Automoveis VALUE (null, :ano_fabricacao, :ano_modelo, :observacoes, :preco, :kilometragem, :modelo);';

        $statement = $pdo->prepare($sql);

        $statement->bindValue(':ano_fabricacao', $objeto->getAnoFabricacao(), PDO::PARAM_STR);
        $statement->bindValue(':ano_modelo', $objeto->getAnoModelo(), PDO::PARAM_STR);
        $statement->bindValue(':observacoes', $objeto->getObservacoes(), PDO::PARAM_STR);
        $statement->bindValue(':preco', $objeto->getPreco(), PDO::PARAM_STR);
        $statement->bindValue(':kilometragem', $objeto->getKilometragem(), PDO::PARAM_STR);
        $statement->bindValue(':modelo', $objeto->getModelo(), PDO::PARAM_STR);

        $statement->execute();
    }

    function editar($objeto)
    {
        $pdo = ConexaoBD::conectar();

        $sql = 'UPDATE Automoveis SET ano_fabricacao = :ano_fabricacao, ano_modelo = :ano_modelo, observacoes = :observacoes, preco = :preco,
                kilometragem = :kilometragem, modelo = :modelo WHERE idAutomovel = :idAutomovel;';

        $statement = $pdo->prepare($sql);

        $statement->bindValue(':idAutomovel', $objeto->getIdAutomovel(), PDO::PARAM_INT);
        $statement->bindValue(':ano_fabricacao', $objeto->getAnoFabricacao(), PDO::PARAM_INT);
        $statement->bindValue(':ano_modelo', $objeto->getAnoModelo(), PDO::PARAM_INT);
        $statement->bindValue(':observacoes', $objeto->getObservacoes(), PDO::PARAM_STR);
        $statement->bindValue(':preco', $objeto->getPreco(), PDO::PARAM_STR);
        $statement->bindValue(':kilometragem', $objeto->getKilometragem(), PDO::PARAM_INT);
        $statement->bindValue(':modelo', $objeto->getModelo(), PDO::PARAM_INT);

        $statement->execute();

    }

    function excluir($objeto)
    {
        $pdo = ConexaoBD::conectar();

        $sql = 'DELETE FROM Automoveis WHERE idAutomovel = :idAutomovel;';

        $statement = $pdo->prepare($sql);

        $statement->bindValue(':idAutomovel', $objeto->getIdAutomovel(), PDO::PARAM_STR);

        $statement->execute();
    }

    function buscar($objeto)
    {
        $pdo = ConexaoBD::conectar();

        $sql = 'SELECT * FROM Automoveis WHERE idAutomovel = :idAutomovel;';

        $statement = $pdo->prepare($sql);

        $statement->bindValue(':idAutomovel', $objeto->getIdAutomovel(), PDO::PARAM_STR);

        $statement->execute();

        $resultado = $statement->fetch(PDO::FETCH_ASSOC);

        if($resultado != false && !empty($resultado))
            $resultado= new Automovel($resultado['idAutomovel'], $resultado['ano_fabricacao'], $resultado['ano_modelo'], $resultado['observacoes'], $resultado['preco'], $resultado['kilometragem'], $resultado['modelo']);
        else
            $resultado = null;

        return $resultado;
    }

    function listar()
    {
        $pdo = ConexaoBD::conectar();

        $sql = 'SELECT a.idAutomovel, a.ano_fabricacao, a.ano_modelo, a.observacoes, a.preco, a.kilometragem, m.descricao FROM Automoveis as a JOIN Modelo as m on(a.modelo = m.idModelo);';

        $statement = $pdo->query($sql);
        $statement = $statement->fetchAll(PDO::FETCH_ASSOC);

        $resultado = null;

        if($statement != null && !empty($statement))
            foreach ($statement as $linha)
                $resultado[] = new Automovel($linha['idAutomovel'], $linha['ano_fabricacao'], $linha['ano_modelo'], $linha['observacoes'],$linha['preco'], $linha['kilometragem'], $linha['descricao']);

        return $resultado;
    }
}