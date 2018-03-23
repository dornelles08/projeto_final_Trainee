<?php
    if(isset($_GET['acao']) && isset($_GET['id']) && isset($_GET['tabela'])){

        $acao = $_GET['acao'];
        $id = $_GET['id'];
        $tabela = $_GET['tabela'];

        switch($acao){
            case 'deletar':
                switch ($tabela){
                    case 'marca':
                        require_once("../persistencias/persistenciaMarca.php");
                        require_once("../models/Marca.php");
                        $marca = new Marca($id, "");
                        persistenciaMarca::excluir($marca);
                        header("Location: ../views/viewMarca.php");
                        break;
                    case 'usuario':
                        require_once ("../persistencias/persistenciaUsuario.php");
                        require_once ("../models/Usuario.php");
                        $usuario = new Usuario("", $id, "", "", "", "", false);
                        persistenciaUsuario::excluir($usuario);
                        header("Location: ../views/viewUsuario.php");
                        break;
                    case 'modelo':
                        require_once ("../persistencias/persistenciaModelo.php");
                        require_once ("../models/Modelo.php");
                        $modelo = new Modelo($id, "", "", 0);
                        persistenciaModelo::excluir($modelo);
                        header("Location: ../views/viewModelo.php");
                        break;
                    case 'automovel':
                        require_once ("../persistencias/persistenciaAutomovel.php");
                        require_once ("../models/Automovel.php");
                        $automovel = new Automovel($id, "","", "", "", "", "");
                        persistenciaAutomovel::excluir($automovel);
                        header("Location: ../views/viewAutomovel.php");
                        break;
                }
                break;
        }
    }
