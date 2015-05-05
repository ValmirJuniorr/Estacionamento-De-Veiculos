<?php

class Banco{
        private $local;
        private $user;
        private $senha;
        private $msg0;
        private $msg1;
        private $nome_db;
        private $db;
//construtor da Classe Banco
public function __construct(){
        $this->local    =       'localhost';
        $this->user     =       'root';
        $this->senha    =       '';
        $this->msg0     =       'Conexão falou, erro: '.mysql_error();
        $this->msg1     =       'Não foi possível selecionar o banco de dados!';
        $this->nome_db  =       'parkmaneger';
}
//Função para abri conexão
public function abrir(){
        $this->db = mysql_connect($this->local,$this->user,$this->senha) or die($this->msg0);
        mysql_select_db($this->nome_db,$this->db) or die($this->msg1);
	// Definindo o charset como utf8 para evitar problemas com acentuação
	$charset = mysql_set_charset('utf8');
}
public function fechar(){
        //analisar se o mysql_close precisa ser colocado numa variável
        $closed = mysql_close($this->db);
		$closed = NULL;
}
public function insertObjectToDB($objeto){ 
        $db = new Banco();
        $db->abrir();
        $sql = "INSERT INTO ".$objeto->getNomeTabela()."(".$objeto->getNomeCampos().") VALUES ( ".$objeto->getValorCampos().")";
        $query = mysql_query($sql) or die ($sql.' '.mysql_error());
        $db->fechar(); 
        unset($objeto);
        $temp_id = explode('_',$objeto->getNomeTabela());
        header('location: '.$temp_id[1].'.php?msg=Inserido');
}	
} //class

?>