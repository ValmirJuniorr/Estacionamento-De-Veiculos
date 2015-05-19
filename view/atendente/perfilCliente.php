<script language="javascript" type="text/javascript" src="js/jquery-2.1.3.min.js"></script>
<script src="js/validate/dist/jquery.validate.min.js"></script>
<script language="javascript" type="text/javascript" src="js/validacao.js"></script>

<?php

    $idCliente = $_GET['idCliente'];
    $sql = "SELECT cliente.idCliente, usuario.* FROM cliente
        INNER JOIN usuario ON usuario.idUsuario = cliente.idUsuario WHERE cliente.idCliente = $idCliente
        ORDER BY usuario.nomeUsuario ASC LIMIT 1";
    $conect = new Banco();
    $conect->abrir();
    $res = mysql_query($sql);
   // Exibe o resultado da nossa consulta
    while ($row = mysql_fetch_array($res)){
     
    // Zebramos nossa linha da tabela onde pegamos o cont dividimos por 2
    // se o resto for zero mostramos uma cor, se não for mostramos outra
?>
<h2 class="titulo">Dados do Cadastro | Cliente</h2>
<br>
<br>
<a href="javascript:history.back()" class="entrar">Voltar</a>
<br>
<br>
<form class="form-login animated fadeInRight" id="formCadastro" action="control/admin/atualizarCliente.php" method="post" >
    <fieldset>		
        <label for="nomeUsuario">Nome</label>
        <input type="text" name="nomeUsuario" id="nomeUsuario" value="<?php echo $row['nomeUsuario'];?>" disabled="disabled" >        
        <label for="cpf">CPF</label>
        <input type="text" name="cpf" id="cpf" value="<?php echo $row['cpf'];?>" disabled="disabled" >  
         <label for="indentidade">Identidade</label>
        <input type="text" name="indentidade" id="indentidade" value="<?php echo $row['indentidade'];?>" disabled="disabled" > 
        <label for="rua">Rua</label>
        <input type="text" name="rua" id="rua" value="<?php echo $row['rua'];?>" disabled="disabled" >        
        <label for="numero">Número</label>
        <input type="text" name="numero" id="numero" value="<?php echo $row['numero'];?>" disabled="disabled" >        
        <label for="cidade">Cidade</label>
        <input type="text" name="cidade" id="cidade" value="<?php echo $row['cidade'];?>" disabled="disabled" >        
        <label for="bairro">Bairro</label>
        <input type="text" name="bairro" id="bairro" value="<?php echo $row['bairro'];?>" disabled="disabled" >        
        <label for="uf">UF</label>
        <input type="text" name="uf" id="uf" value="<?php echo $row['uf'];?>" disabled="disabled">        
              
        <input type="hidden" name="idUsuario" id="idUsuario" value="<?php echo $row['idUsuario'];?>" disabled="disabled">                
    </fieldset>
</form>
    <?php } ?>