<?php
/**
 * Created by PhpStorm.
 * User: liped
 * Date: 20/03/2018
 * Time: 18:37
 */

require_once 'Dao.php';
require_once 'ConexaoBD.php';
require_once ("../models/Usuario.php");

class persistenciaUsuario implements Dao
{

    public function cadastrar($objeto)
    {
        $pdo = ConexaoBD::conectar();

        $sql = 'INSERT INTO Usuario VALUE (:nome, :cpf, :telefone, :email, :login, :senha, :isAdmin);';

        $statement = $pdo->prepare($sql);

        $statement->bindValue(':nome', $objeto->getNome(), PDO::PARAM_STR);
        $statement->bindValue(':cpf', $objeto->getCpf() ,PDO::PARAM_STR);
        $statement->bindValue(':telefone', $objeto->getTelefone() ,PDO::PARAM_STR);
        $statement->bindValue(':email', $objeto->getEmail() ,PDO::PARAM_STR);
        $statement->bindValue(':login', $objeto->getLogin() ,PDO::PARAM_STR);
        $statement->bindValue(':senha', $objeto->getSenha() ,PDO::PARAM_STR);
        $statement->bindValue(':isAdmin', $objeto->getIsAdmin() ,PDO::PARAM_STR);

        $statement->execute();
    }

    function editar($objeto)
    {
        $pdo = ConexaoBD::conectar();

        $sql ='UPDATE Usuario SET nome = :nome, telefone = :telefone, email = :email, login = :login, senha = :senha WHERE cdf = :cpf;';

        $statement = $pdo->prepare($sql);

        $statement->bindValue(':nome', $objeto->getNome(), PDO::PARAM_STR);
        $statement->bindValue(':cdf', $objeto->getCpf() ,PDO::PARAM_STR);
        $statement->bindValue(':telefone', $objeto->getTelefone() ,PDO::PARAM_STR);
        $statement->bindValue(':email', $objeto->getEmail() ,PDO::PARAM_STR);
        $statement->bindValue(':login', $objeto->getLogin() ,PDO::PARAM_STR);
        $statement->bindValue(':senha', $objeto->getSenha() ,PDO::PARAM_STR);
        $statement->bindValue(':isAdmin', $objeto->getIsAdmin() ,PDO::PARAM_STR);

        $statement->execute();
    }

    function excluir($objeto)
    {
        $pdo = ConexaoBD::conectar();

        $sql = 'DELETE FROM Usuario WHERE cpf = :cpf;';

        $statement = $pdo->prepare($sql);

        $statement->bindValue(':cpf', $objeto->getCpf() ,PDO::PARAM_STR);

        $statement->execute();
    }

    function buscar($objeto)
    {
        $pdo = ConexaoBD::conectar();

        $sql = 'SELECT * FROM Usuario WHERE login = :login AND senha = :senha;';

        $statement = $pdo->prepare($sql);

        $statement->bindValue(':login', $objeto->getLogin(), PDO::PARAM_STR);
        $statement->bindValue(':senha', $objeto->getSenha() ,PDO::PARAM_STR);

        $statement->execute();

        $resultado = $statement->fetch(PDO::FETCH_ASSOC);
        if($resultado!=null && !empty($resultado))
            $resultado = new Usuario ($resultado['nome'], $resultado['cpf'], $resultado['telefone'], $resultado['email'], $resultado['login'], $resultado['senha'], $resultado['isAdmin']);
        else
            $resultado=null;

        return $resultado;
    }

    function listar()
    {
        $pdo = ConexaoBD::conectar();

        $sql = 'SELECT * FROM Usuario;';

        $statement = $pdo->query($sql);
        $statement = $statement->fetchAll(PDO::FETCH_ASSOC);

        $resultado = null;

        if($statement!=null && !empty($statement))
            foreach ($statement as $linha)
                $resultado[] = new Usuario($linha['nome'], $linha['cpf'], $linha['telefone'], $linha['email'], $linha['login'], $linha['senha'], $linha['isAdmin']);

        return $resultado;
    }
}