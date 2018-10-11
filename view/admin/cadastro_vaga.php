<script language="javascript" type="text/javascript" src="js/jquery-2.1.3.min.js"></script>
<script src="js/validate/dist/jquery.validate.min.js"></script>
<script language="javascript" type="text/javascript" src="js/validacao.js"></script>
<?php include_once 'control/admin/verificarPermissao.php'; ?>
<form method="post" <?php //action="control/admin/cadastrarEmpregado.php"?> class="form-login animated fadeInRight" id="formCadastro">
    <fieldset>		
            <label for="valor">valor</label>
            <input type="text" name="valor" id="valor" placeholder="Ex: 2,00">
            <input type="submit" name="entrar" id="entrar" value="Cadastrar Atendente" placeholder="Entrar" class="entrar">						
    </fieldset>
</form>

<?php
    if (isset($_POST['valor'])) {
        include 'control/admin/cadastrarVaga.php';
    }
?>