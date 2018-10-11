<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Locacao.
 *
 * @author Valmir
 */
class Locacao
{
    private $idLocacao;
    private $horaEntrada;
    private $horaSaida;
    private $vaga;
    private $cliente;

    public function getIdLocacao()
    {
        return $this->idLocacao;
    }

    public function getHoraEntrada()
    {
        return $this->horaEntrada;
    }

    public function getHoraSaida()
    {
        return $this->horaSaida;
    }

    public function getVaga()
    {
        return $this->vaga;
    }

    public function getCliente()
    {
        return $this->cliente;
    }

    public function setIdLocacao($idLocacao)
    {
        $this->idLocacao = $idLocacao;
    }

    public function setHoraEntrada($horaEntrada)
    {
        $this->horaEntrada = $horaEntrada;
    }

    public function setHoraSaida($horaSaida)
    {
        $this->horaSaida = $horaSaida;
    }

    //Recebe Um objeto vaga
    public function setVaga($vaga)
    {
        $vaga->locado = true;
        $this->vaga = $vaga;
    }

    public function setCliente($cliente)
    {
        $this->cliente = $cliente;
    }
}
