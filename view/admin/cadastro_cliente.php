<script language="javascript" type="text/javascript" src="js/jquery-2.1.3.min.js"></script>
<script src="js/validate/dist/jquery.validate.min.js"></script>
<script language="javascript" type="text/javascript" src="js/validacao.js"></script>

<?php
include_once 'control/admin/verificarPermissao.php';
?>
<h2 class="titulo">Cadastro</h2>
<form class="form-login animated fadeInRight" id="formCadastro"  method="post">
    <fieldset>		
        <label for="nomeUsuario">Nome</label>
        <input type="text" name="nomeUsuario" id="nomeUsuario" placeholder="Nome">        
        <label for="cpf">CPF</label>
        <input type="text" name="cpf" id="cpf" placeholder="Ex: 000.000.000.-00">  
        <label for="indentidade">Identidade</label>
        <input type="text" name="indentidade" id="indentidade" placeholder="Ex: 0000000000-0"> 
        <label for="rua">Rua</label>
        <input type="text" name="rua" id="rua" placeholder="Ex: 22 de Julho">        
        <label for="numero">Número</label>
        <input type="text" name="numero" id="numero" placeholder="Ex: 000">        
        <label for="cidade">Cidade</label>
        <input type="text" name="cidade" id="cidade" placeholder="Ex: Juazeiro">        
        <label for="bairro">Bairro</label>
        <input type="text" name="bairro" id="bairro" placeholder="Ex: Novo Juazeiro">        
        <label for="uf">UF</label>
        <input type="text" name="uf" id="uf" placeholder="Ex: CE">        
             
        <input type="submit" name="cadastrar" id="cadastrar" value="Cadastrar" class="entrar">						
    </fieldset>
</form>
    <?php
    if (isset($_POST['nomeUsuario'])) {
        echo '<h1>Entrou</h1>';
        include 'control/admin/cadastrarCliente.php';
    }
?>