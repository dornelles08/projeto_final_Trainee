<?php
/**
 * Created by PhpStorm.
 * User: liped
 * Date: 20/03/2018
 * Time: 18:37
 */

class Automovel
{
    private $idAutomovel;
    private $ano_fabricacao;
    private $ano_modelo;
    private $observacoes;
    private $preco;
    private $kilometragem;
    private $modelo;

    /**
     * automovel constructor.
     * @param $idAutomovel
     * @param $ano_fabricacao
     * @param $ano_modelo
     * @param $observacoes
     * @param $preco
     * @param $kilometragem
     * @param $modelo
     */
    public function __construct($idAutomovel, $ano_fabricacao, $ano_modelo, $observacoes, $preco, $kilometragem, $modelo)
    {
        $this->idAutomovel = $idAutomovel;
        $this->ano_fabricacao = $ano_fabricacao;
        $this->ano_modelo = $ano_modelo;
        $this->observacoes = $observacoes;
        $this->preco = $preco;
        $this->kilometragem = $kilometragem;
        $this->modelo = $modelo;
    }

    /**
     * @return mixed
     */
    public function getIdAutomovel()
    {
        return $this->idAutomovel;
    }

    /**
     * @param mixed $idAutomovel
     */
    public function setIdAutomovel($idAutomovel): void
    {
        $this->idAutomovel = $idAutomovel;
    }

    /**
     * @return mixed
     */
    public function getAnoFabricacao()
    {
        return $this->ano_fabricacao;
    }

    /**
     * @param mixed $ano_fabricacao
     */
    public function setAnoFabricacao($ano_fabricacao): void
    {
        $this->ano_fabricacao = $ano_fabricacao;
    }

    /**
     * @return mixed
     */
    public function getAnoModelo()
    {
        return $this->ano_modelo;
    }

    /**
     * @param mixed $ano_modelo
     */
    public function setAnoModelo($ano_modelo): void
    {
        $this->ano_modelo = $ano_modelo;
    }

    /**
     * @return mixed
     */
    public function getObservacoes()
    {
        return $this->observacoes;
    }

    /**
     * @param mixed $observacoes
     */
    public function setObservacoes($observacoes): void
    {
        $this->observacoes = $observacoes;
    }

    /**
     * @return mixed
     */
    public function getPreco()
    {
        return $this->preco;
    }

    /**
     * @param mixed $preco
     */
    public function setPreco($preco): void
    {
        $this->preco = $preco;
    }

    /**
     * @return mixed
     */
    public function getKilometragem()
    {
        return $this->kilometragem;
    }

    /**
     * @param mixed $kilometragem
     */
    public function setKilometragem($kilometragem): void
    {
        $this->kilometragem = $kilometragem;
    }

    /**
     * @return mixed
     */
    public function getModelo()
    {
        return $this->modelo;
    }

    /**
     * @param mixed $modelo
     */
    public function setModelo($modelo): void
    {
        $this->modelo = $modelo;
    }




}