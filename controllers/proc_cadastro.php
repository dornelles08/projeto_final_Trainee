<?php
/**
 * Created by PhpStorm.
 * User: liped
 * Date: 22/03/2018
 * Time: 21:31
 */

    if(isset($_POST['cadastrar']) && $_POST['cadastrar'] == "Cadastrar"){
        $tabela = $_GET['tabela'];
        switch ($tabela){
            case 'usuario':
                require_once ("../persistencias/persistenciaUsuario.php");
                $usuario = new Usuario($_POST['nome'], $_POST['cpf'], $_POST['telefone'], $_POST['email'], $_POST['login'], $_POST['senha'], false);
                persistenciaUsuario::cadastrar($usuario);
                header("Location: ../index.php");
                break;
            case 'marca':
                require_once ("../persistencias/persistenciaMarca.php");
                require_once ("../models/Marca.php");
                $marca = new Marca(null, $_POST['nome']);
                persistenciaMarca::cadastrar($marca);
                header("Location: ../views/viewMarca.php");
                break;
            case 'modelo':
                require_once ("../persistencias/persistenciaModelo.php");
                $modelo = new Modelo(null, $_POST['descricao'], $_POST['potencia'], $_POST['marca']);
                persistenciaModelo::cadastrar($modelo);
                header("Location: ../views/viewModelo.php");
                break;
            case 'automovel':
                require_once ("../persistencias/persistenciaAutomovel.php");
                $automovel = new Automovel(null, $_POST['ano_fabricacao'], $_POST['ano_modelo'], $_POST['observacoes'], $_POST['preco'], $_POST['kilometragem'], $_POST['modelo']);
                persistenciaAutomovel::cadastrar($automovel);
                header("Location: ../views/viewAutomovel.php");
                break;
        }
    }

