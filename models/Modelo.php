<?php
/**
 * Created by PhpStorm.
 * User: liped
 * Date: 20/03/2018
 * Time: 18:37
 */

class Modelo
{
    private $idModelo;
    private $descricao;
    private $potencia;
    private $marca;

    /**
     * Modelo constructor.
     * @param $idModelo
     * @param $descricao
     * @param $potencia
     * @param $marca
     */
    public function __construct($idModelo, $descricao, $potencia, $marca)
    {
        $this->idModelo = $idModelo;
        $this->descricao = $descricao;
        $this->potencia = $potencia;
        $this->marca = $marca;
    }

    /**
     * @return mixed
     */
    public function getIdModelo()
    {
        return $this->idModelo;
    }

    /**
     * @param mixed $idModelo
     */
    public function setIdModelo($idModelo): void
    {
        $this->idModelo = $idModelo;
    }

    /**
     * @return mixed
     */
    public function getDescricao()
    {
        return $this->descricao;
    }

    /**
     * @param mixed $descricao
     */
    public function setDescricao($descricao): void
    {
        $this->descricao = $descricao;
    }

    /**
     * @return mixed
     */
    public function getPotencia()
    {
        return $this->potencia;
    }

    /**
     * @param mixed $potencia
     */
    public function setPotencia($potencia): void
    {
        $this->potencia = $potencia;
    }

    /**
     * @return mixed
     */
    public function getMarca()
    {
        return $this->marca;
    }

    /**
     * @param mixed $marca
     */
    public function setMarca($marca): void
    {
        $this->marca = $marca;
    }




}