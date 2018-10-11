<?php

use Usuario;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Cliente.
 *
 * @author tecnica_uab
 */
class Cliente extends Usuario
{
    private $status;
    private $numeroVisitas = 0;
    private $totalGasto = 0;
    private $saldo = 0.0;

    public function getStatus()
    {
        return $this->status;
    }

    public function getNumeroVisitas()
    {
        return $this->numeroVisitas;
    }

    public function getTotalGasto()
    {
        return $this->totalGasto;
    }

    public function getSaldo()
    {
        return $this->saldo;
    }

    public function setStatus($status)
    {
        $this->status = $status;
    }

    public function setNumeroVisitas($numeroVisitas)
    {
        $this->numeroVisitas = $numeroVisitas;
    }

    public function setTotalGasto($totalGasto)
    {
        $this->totalGasto = $totalGasto;
    }

    public function setSaldo($saldo)
    {
        $this->saldo = $saldo;
    }

    public function efetuaPagamento($divida)
    {
        $this->numeroVisitas++;
        $this->totalGasto += $divida;
        if ($this->saldo > $divida) {
            $this->saldo -= $divida;

            return true;
        } else {
            return false;
        }
    }

    public function debitaSaldo($debito)
    {
        $this->saldo -= $debito;
    }

    public function creditaSaldo($saldo)
    {
        $this->saldo += $saldo;
    }
}
