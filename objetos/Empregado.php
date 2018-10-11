<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Empregado.
 *
 * @author tecnica_uab
 */
class Empregado extends Usuario
{
    private $senha;
    private $tipo;

    public function getSenha()
    {
        return $this->senha;
    }

    public function getTipo()
    {
        return $this->tipo;
    }

    public function setSenha($senha)
    {
        $this->senha = $senha;
    }

    public function setTipo($tipo)
    {
        $this->tipo = $tipo;
    }

    public function autentica($senha)
    {
        if ($this->senha == $senha) {
            return true;
        }

        return false;
    }

    public function locarVaga($cliente, $vaga)
    {
    }
}
