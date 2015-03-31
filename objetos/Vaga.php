<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Vaga
 *
 * @author Valmir
 */
class Vaga {
    private $idvaga;
    private $localHorizont;
    private $localVericar;
    private $valorVaga;
    private $locado;
    
    function getLocacao() {
        return $this->locado;
    }

    function setLocacao($locacao) {
        $this->locado = $locacao;
    }

        function getIdvaga() {
        return $this->idvaga;
    }

    function getLocalHorizont() {
        return $this->localHorizont;
    }

    function getLocalVericar() {
        return $this->localVericar;
    }

    function getValorVaga() {
        return $this->valorVaga;
    }

    function setIdvaga($idvaga) {
        $this->idvaga = $idvaga;
    }

    function setLocalHorizont($localHorizont) {
        $this->localHorizont = $localHorizont;
    }

    function setLocalVericar($localVericar) {
        $this->localVericar = $localVericar;
    }

    function setValorVaga($valorVaga) {
        $this->valorVaga = $valorVaga;
    }


    
}
