<?php
/**
 * Created by PhpStorm.
 * User: liped
 * Date: 22/03/2018
 * Time: 21:31
 */

if(isset($_POST['atualizar']) && $_POST['atualizar'] == "Atualizar"){
    $tabela = $_GET['tabela'];
    switch ($tabela){
        case 'usuario':
            require_once ("../persistencias/persistenciaUsuario.php");
            if($_POST['admin'] == "true"){
                $usuario = new Usuario($_POST['nome'], $_POST['cpf'], $_POST['telefone'], $_POST['email'], $_POST['login'], $_POST['senha'], true);
            }
            else{
                $usuario = new Usuario($_POST['nome'], $_POST['cpf'], $_POST['telefone'], $_POST['email'], $_POST['login'], $_POST['senha'], false);
            }

            persistenciaUsuario::editar($usuario);
            header("Location: ../views/viewUsuario.php");
            break;
        case 'marca':
            require_once ("../persistencias/persistenciaMarca.php");
            $marca = new Marca($_POST['id'], $_POST['nome']);
            persistenciaMarca::editar($marca);
            header("Location: ../views/viewMarca.php");
            break;
        case 'modelo':
            require_once ("../persistencias/persistenciaModelo.php");
            $modelo = new Modelo($_POST['id'], $_POST['descricao'], $_POST['potencia'], $_POST['marca']);
            persistenciaModelo::editar($modelo);
            header("Location: ../views/viewModelo.php");
            break;
        case 'automovel':
            require_once ("../persistencias/persistenciaAutomovel.php");
            $automovel = new Automovel($_POST['id'], $_POST['ano_fabricacao'], $_POST['ano_modelo'], $_POST['observacoes'], $_POST['preco'], $_POST['kilometragem'], $_POST['modelo']);
            persistenciaAutomovel::editar($automovel);
            //var_dump($automovel);
            header("Location: ../views/viewAutomovel.php");
            break;
    }
}

