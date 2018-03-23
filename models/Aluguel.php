<?php
/**
 * Created by PhpStorm.
 * User: liped
 * Date: 22/03/2018
 * Time: 15:25
 */

class Aluguel
{
    private $cliente;
    private $automovel;
    private $valor;
    private $dataAluguel;
    private $multa;
    private $dataDevolucao;
    private $idAluguel;

    /**
     * Aluguel constructor.
     * @param $cliente
     * @param $automovel
     * @param $valor
     * @param $dataAluguel
     * @param $multa
     * @param $dataDevolucao
     */
    public function __construct($idAluguel, $cliente, $automovel, $valor, $dataAluguel, $multa, $dataDevolucao)
    {
        $this->idAluguel = $idAluguel;
        $this->cliente = $cliente;
        $this->automovel = $automovel;
        $this->valor = $valor;
        $this->dataAluguel = $dataAluguel;
        $this->multa = $multa;
        $this->dataDevolucao = $dataDevolucao;
    }

    /**
     * @return mixed
     */
    public function getIdAluguel()
    {
        return $this->idAluguel;
    }

    /**
     * @param mixed $idAluguel
     */
    public function setIdAluguel($idAluguel): void
    {
        $this->idAluguel = $idAluguel;
    }

    /**
     * @return mixed
     */
    public function getCliente()
    {
        return $this->cliente;
    }

    /**
     * @param mixed $cliente
     */
    public function setCliente($cliente): void
    {
        $this->cliente = $cliente;
    }

    /**
     * @return mixed
     */
    public function getAutomovel()
    {
        return $this->automovel;
    }

    /**
     * @param mixed $automovel
     */
    public function setAutomovel($automovel): void
    {
        $this->automovel = $automovel;
    }

    /**
     * @return mixed
     */
    public function getValor()
    {
        return $this->valor;
    }

    /**
     * @param mixed $valor
     */
    public function setValor($valor): void
    {
        $this->valor = $valor;
    }

    /**
     * @return mixed
     */
    public function getDataAluguel()
    {
        return $this->dataAluguel;
    }

    /**
     * @param mixed $data
     */
    public function setDataAluguel($dataAluguel): void
    {
        $this->dataAluguel = $dataAluguel;
    }

    /**
     * @return mixed
     */
    public function getMulta()
    {
        return $this->multa;
    }

    /**
     * @param mixed $multa
     */
    public function setMulta($multa): void
    {
        $this->multa = $multa;
    }

    /**
     * @return mixed
     */
    public function getDataDevolucao()
    {
        return $this->dataDevolucao;
    }

    /**
     * @param mixed $dataDevolucao
     */
    public function setDataDevolucao($dataDevolucao): void
    {
        $this->dataDevolucao = $dataDevolucao;
    }


}