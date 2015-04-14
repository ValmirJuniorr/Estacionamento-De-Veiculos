<script language="javascript" type="text/javascript" src="js/jquery-2.1.3.min.js"></script>
<script src="js/validate/dist/jquery.validate.min.js"></script>
<script language="javascript" type="text/javascript" src="js/validacao.js"></script>

<?php
include_once("control/admin/verificarPermissao.php");	
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

?>
<h2 class="titulo">Redefinir Senha</h2>
<form class="form-login animated fadeInRight" id="formCadastro" action="control/admin/atualizarSenha.php" method="post" >
    <fieldset>		
        <label for="senha">Senha</label>
        <input type="password" name="senha" id="senha" placeholder="*****">
        <label for="confirmarSenha">Confirmar Senha</label>
        <input type="password" name="confirmarSenha" id="confirmarSenha" placeholder="*****">
        <input type="hidden" name="idEmpregado" id="idEmpregado" value="idEmpregado">        
        <input type="submit" name="atualizar" id="atualizar" value="Atualizar" placeholder="Entrar" class="entrar">						
    </fieldset>
</form>