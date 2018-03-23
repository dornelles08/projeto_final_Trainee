<?php
/**
 * Created by PhpStorm.
 * User: liped
 * Date: 20/03/2018
 * Time: 18:40
 */
    interface Dao{

        function cadastrar($objeto);
        function editar($objeto);
        function excluir($objeto);
        function buscar($objeto);
        function listar();

    }
?>