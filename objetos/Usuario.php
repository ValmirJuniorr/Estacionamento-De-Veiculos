<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Usuario.
 *
 * @author tecnica_uab
 */
class Usuario
{
    private $id;
    private $nome;
    private $cpf;
    private $indentidade;
    private $rua;
    private $numero;
    private $cidade;
    private $uf;

    public function getId()
    {
        return $this->id;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function getCpf()
    {
        return $this->cpf;
    }

    public function getIndentidade()
    {
        return $this->indentidade;
    }

    public function getRua()
    {
        return $this->rua;
    }

    public function getNumero()
    {
        return $this->numero;
    }

    public function getCidade()
    {
        return $this->cidade;
    }

    public function getUf()
    {
        return $this->uf;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function setCpf($cpf)
    {
        $this->cpf = $cpf;
    }

    public function setIndentidade($indentidade)
    {
        $this->indentidade = $indentidade;
    }

    public function setRua($rua)
    {
        $this->rua = $rua;
    }

    public function setNumero($numero)
    {
        $this->numero = $numero;
    }

    public function setCidade($cidade)
    {
        $this->cidade = $cidade;
    }

    public function setUf($uf)
    {
        $this->uf = $uf;
    }
}
