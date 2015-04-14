<?php 

class Cliente{
	private $id;
	private $idUsuario;
	private $login;
	private $senha;
	private $nivel_acesso;
	
	public function getId(){
		return $this->id;
	}
	public function getIdUsuario(){
		return $this->idUsuario;
	}
	public function getLogin(){
		return $this->login;
	}
	public function getSenha(){
		return $this->senha;
	}
	public function getNivel(){
		return $this->nivel_acesso;
	}

	public function logar($login, $senha){	
		$login = mysql_real_escape_string($login);//Transforma em String qualquer busca Sql
		$senha = mysql_real_escape_string($senha);	
		$bd = new Banco();
		$bd->abrir();
		$sql =  mysql_query("SELECT id, id_usuario, login, senha, nivel_acesso FROM usuario WHERE login = '$login' Limit 1") or die (mysql_error());
		$contar = mysql_num_rows($sql);
		while($linha = mysql_fetch_array($sql)){
			$id_db = $linha['id'];	
			$idUsuario_db = $linha['id_usuario'];	
			$login_db = $linha['login'];	
			$senha_db = $linha['senha'];	
			$nivel_acesso_db = $linha['nivel_acesso'];	
		}		
		if($contar == 0){
			return false;
		}else{
			if($senha_db !=$senha){
				return false;
			}else{
				$this->id = $id_db;
				$this->idUsuario = $idUsuario_db;
				$this->login = $login_db;
				$this->senha = $senha_db;				
				$this->nivel_acesso = $nivel_acesso_db;				
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
		$sql =  mysql_query("SELECT login, senha FROM usuario WHERE login = '$login' Limit 1") or die (mysql_error());
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
}
?>