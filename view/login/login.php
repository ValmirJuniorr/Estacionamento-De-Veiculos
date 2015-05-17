<section class="box-login">
		
        <?php 
        if(!empty($_COOKIE['login'])){
            $cookie = $_COOKIE['login'];
            $cookie = explode('&', $cookie);
            $f['login'] = base64_decode($cookie[0]); 
            $f['senha'] = base64_decode($cookie[1]);            
            $f['manterConectado'] = 1;
        }else{
            $f['login'] = ''; 
            $f['senha'] = '';   
            $f['manterConectado'] = 0;
        }
        
        
        ?>        
        <h1 class="animated bounce">Login | Estacionamento de Veiculos</h1>
        
	<form method="post" action="control/Usuario/login.php" class="form-login animated fadeInRight">
		<fieldset>		
			<label for="nome">Login</label>
                        <input type="text" name="login" id="login" placeholder="Seu Nome" value="<?php echo $f['login'];?>">
			<label for="senha">Senha</label>
			<input type="password" name="senha" id="senha" placeholder="*****" value="<?php echo $f['senha'];?>">
			<input type="submit" name="entrar" id="entrar" value="Entrar" placeholder="Entrar" class="entrar">			
			<div class="manterConect">
				<input type="checkbox" name="manterConectado" id="manterConectado" value="1" <?php if($f['manterConectado'] == 1) echo 'checked'; ?>>
                                <input type="hidden" name="manterConectado" id="manterConectado" value="0">
				<label for="manterConectado">Mantenha-me conectado</label>
			</div>			
		</fieldset>
	</form>
       
</section>