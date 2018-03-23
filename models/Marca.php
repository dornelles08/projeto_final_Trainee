<?php
/**
 * Created by PhpStorm.
 * User: liped
 * Date: 20/03/2018
 * Time: 18:37
 */

class Marca
{
    private $idMarca;
    private $nome;

    /**
     * Marca constructor.
     * @param $idMarca
     * @param $nome
     */
    public function __construct($idMarca, $nome)
    {
        $this->idMarca = $idMarca;
        $this->nome = $nome;
    }

    /**
     * @return mixed
     */
    public function getIdMarca()
    {
        return $this->idMarca;
    }

    /**
     * @param mixed $idMarca
     */
    public function setIdMarca($idMarca): void
    {
        $this->idMarca = $idMarca;
    }

    /**
     * @return mixed
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * @param mixed $nome
     */
    public function setNome($nome): void
    {
        $this->nome = $nome;
    }




}