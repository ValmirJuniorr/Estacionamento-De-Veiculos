<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Usuario.
 *
 * @author jerffeson
 */
class Usuario
{
    //put your code here

    private $idUsuario;
    private $nomeUsuario;
    private $cpf;
    private $identidade;
    private $rua;
    private $cidade;
    private $uf;
    private $numero;

    public function getId()
    {
        return $this->idUsuario;
    }

    public function getNome()
    {
        return $this->nomeUsuario;
    }

    public function getCpf()
    {
        return $this->cpf;
    }

    public function getIdentidade()
    {
        return $this->identidade;
    }

    public function getRua()
    {
        return $this->rua;
    }

    public function getCidade()
    {
        return $this->cidade;
    }

    public function getUf()
    {
        return $this->uf;
    }

    public function getNumero()
    {
        return $this->numero;
    }

    public function setIdUsuario($idUsuario)
    {
        $this->idUsuario = $idUsuario;
    }

    public function setNomeUsuario($nomeUsuario)
    {
        $this->nomeUsuario = $nomeUsuario;
    }

    public function setCidade($cidade)
    {
        $this->cidade = $cidade;
    }

    public function setUf($uf)
    {
        $this->uf = $uf;
    }

    public function setNumero($numero)
    {
        $this->numero = $numero;
    }
}
