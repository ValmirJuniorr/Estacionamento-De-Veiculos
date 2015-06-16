<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Locacao
 *
 * @author Valmir
 */
class Locacao {
    private $idLocacao;
    private $horaEntrada;
    private $horaSaida;
    private $vaga;
    private $cliente;
    function getIdLocacao() {
        return $this->idLocacao;
    }

    function getHoraEntrada() {
        return $this->horaEntrada;
    }

    function getHoraSaida() {
        return $this->horaSaida;
    }

    function getVaga() {
        return $this->vaga;
    }

    function getCliente() {
        return $this->cliente;
    }

    function setIdLocacao($idLocacao) {
        $this->idLocacao = $idLocacao;
    }

    function setHoraEntrada($horaEntrada) {
        $this->horaEntrada = $horaEntrada;
    }

    function setHoraSaida($horaSaida) {
        $this->horaSaida = $horaSaida;
    }
    //Recebe Um objeto vaga
    function setVaga($vaga) {
        $vaga->locado=true;
        $this->vaga = $vaga;
    }

    function setCliente($cliente) {        
        $this->cliente = $cliente;
    }


    
}
