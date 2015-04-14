<section class="box-login">
	<h1 class="animated bounce">Login | Estacionamento de Veiculos</h1>	
	<form method="post" action="control/Usuario/login.php" class="form-login animated fadeInRight">
		<fieldset>		
			<label for="nome">Login</label>
			<input type="text" name="login" id="login" placeholder="Seu Nome">
			<label for="senha">Senha</label>
			<input type="password" name="senha" id="senha" placeholder="*****">
			<input type="submit" name="entrar" id="entrar" value="Entrar" placeholder="Entrar" class="entrar">			
			<div class="manterConect">
				<input type="checkbox" name="manterConectado" id="manterConectado">
				<label for="manterConectado">Mantenha-me conectado</label>
			</div>
			<a href="#">Não consegue acessar sua conta?</a>
		</fieldset>
	</form>
</section>