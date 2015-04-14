<?php
include 'Usuario.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Empregado
 *
 * @author jerffeson
 */
class Empregado extends Usuario{
    //put your code here
    private $login;
    private $senha;
    private $tipo;    
    private $idEmpregado;
    
    public function autentica($login, $senha){	
        $login = mysql_real_escape_string($login);//Transforma em String qualquer busca Sql
        $senha = mysql_real_escape_string($senha);	
        $bd = new Banco();
        $bd->abrir();
        $sql =  mysql_query("SELECT idEmpregado, login, senha, tipo, idUsuario FROM empregado WHERE login = '$login' Limit 1") or die (mysql_error());
        $contar = mysql_num_rows($sql);
        while($linha = mysql_fetch_array($sql)){
            $idEmpregado = $linha['idEmpregado'];		
            $login = $linha['login'];	
            $senha_db = $linha['senha'];	
            $tipo = $linha['tipo'];	
            $idUsuario = $linha['idUsuario'];	
        }		
        if($contar == 0){
            return false;
        }else{
            if($senha_db !=$senha){
                return false;
            }else{
                $this->idUsuario = $idUsuario;                            
                $this->idEmpregado = $idEmpregado;		
                $this->login = $login;	
                $this->senha = $senha;	
                $this->tipo = $tipo;
                return true;
            }
        }
        $bd->fechar();
    }
    public function verificarLogin(){
        $bd = new Banco();
        $bd->abrir();
        $login = mysql_real_escape_string($this->login);//Transforma em String qualquer busca Sql
        $senha = mysql_real_escape_string($this->senha);
        $sql =  mysql_query("SELECT login, senha FROM empregado WHERE login = '$login' Limit 1") or die (mysql_error());
        $contar = mysql_num_rows($sql);
        while($linha = mysql_fetch_array($sql)){
            $senha_db = $linha['senha'];	
        }		
        if($contar == 0){
            return false;
        }else{
            if($senha_db !=$senha){
                    return false;
            }else{			
                    return true;
            }
        }
        $bd->fechar();
    }
    public function getTipo(){
        return $this->tipo;
    }
 
}
