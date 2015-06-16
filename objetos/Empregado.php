<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Empregado
 *
 * @author tecnica_uab
 */
class Empregado extends Usuario {
    private $senha;
    private $tipo;
    
    function getSenha() {
        return $this->senha;
    }

    function getTipo() {
        return $this->tipo;
    }

    function setSenha($senha) {
        $this->senha = $senha;
    }

    function setTipo($tipo) {
        $this->tipo = $tipo;
    }
    
    function autentica($senha){
        if($this->senha==$senha)
            return true;
        return false;
    }
    function locarVaga($cliente,$vaga){
        
    }


    
}
