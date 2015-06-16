<?php

use Usuario;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Cliente
 *
 * @author tecnica_uab
 */
class Cliente extends Usuario{
    private $status;
    private $numeroVisitas=0;
    private $totalGasto=0;
    private $saldo=0.0;
    
    function getStatus() {
        return $this->status;
    }

    function getNumeroVisitas() {
        return $this->numeroVisitas;
    }

    function getTotalGasto() {
        return $this->totalGasto;
    }

    function getSaldo() {
        return $this->saldo;
    }

    function setStatus($status) {
        $this->status = $status;
    }

    function setNumeroVisitas($numeroVisitas) {
        $this->numeroVisitas = $numeroVisitas;
    }

    function setTotalGasto($totalGasto) {
        $this->totalGasto = $totalGasto;
    }

    function setSaldo($saldo) {
        $this->saldo = $saldo;
    }

        
    function efetuaPagamento($divida){
        $this->numeroVisitas++;        
        $this->totalGasto+=$divida;
        if($this->saldo>$divida){
            $this->saldo-=$divida;
            return true;
        }
        else{
            return false;
        }
    }
    function debitaSaldo($debito){
        $this->saldo-=$debito;
    }
    
    function creditaSaldo($saldo){
        $this->saldo+=$saldo;
    }    
}
