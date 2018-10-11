<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Vaga.
 *
 * @author Valmir
 */
class Vaga
{
    private $idvaga;
    private $localHorizont;
    private $localVericar;
    private $valorVaga;
    private $locado;

    public function getLocacao()
    {
        return $this->locado;
    }

    public function setLocacao($locacao)
    {
        $this->locado = $locacao;
    }

    public function getIdvaga()
    {
        return $this->idvaga;
    }

    public function getLocalHorizont()
    {
        return $this->localHorizont;
    }

    public function getLocalVericar()
    {
        return $this->localVericar;
    }

    public function getValorVaga()
    {
        return $this->valorVaga;
    }

    public function setIdvaga($idvaga)
    {
        $this->idvaga = $idvaga;
    }

    public function setLocalHorizont($localHorizont)
    {
        $this->localHorizont = $localHorizont;
    }

    public function setLocalVericar($localVericar)
    {
        $this->localVericar = $localVericar;
    }

    public function setValorVaga($valorVaga)
    {
        $this->valorVaga = $valorVaga;
    }
}
