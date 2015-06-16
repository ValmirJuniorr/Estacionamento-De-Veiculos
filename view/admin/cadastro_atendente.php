<script language="javascript" type="text/javascript" src="js/jquery-2.1.3.min.js"></script>
<script src="js/validate/dist/jquery.validate.min.js"></script>
<script language="javascript" type="text/javascript" src="js/validacao.js"></script>
<?php include_once("control/admin/verificarPermissao.php");	?>
<form method="post" <?php //action="control/admin/cadastrarEmpregado.php"?> class="form-login animated fadeInRight" id="formCadastro">
    <fieldset>		
            <label for="nome">Login</label>
            <input type="text" name="login" id="login" placeholder="Seu Nome">
            <label for="senha">Senha</label>
            <input type="password" name="senha" id="senha" placeholder="*****">
            <label for="confirmarSenha">Confirmar Senha</label>
            <input type="password" name="confirmarSenha" id="confirmarSenha" placeholder="*****">
            <input type="submit" name="entrar" id="entrar" value="Cadastrar Atendente" placeholder="Entrar" class="entrar">						
    </fieldset>
</form>

<?php
    if(isset($_POST['login'])){
        include'control/admin/cadastrarEmpregado.php';
    }
?>