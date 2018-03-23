<?php
/**
 * Created by PhpStorm.
 * User: liped
 * Date: 20/03/2018
 * Time: 18:39
 */

class ConexaoBD
{
    static function conectar(){
        try{
            $pdo = new PDO('mysql:host=localhost;dbname=projeto_Trainee', "root", "felipe15");
        }catch(PDOException $e){
            echo $e->getMessage();
        }
        return $pdo;
    }
}