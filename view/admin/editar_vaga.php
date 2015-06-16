<script language="javascript" type="text/javascript" src="js/jquery-2.1.3.min.js"></script>
<script src="js/validate/dist/jquery.validate.min.js"></script>
<script language="javascript" type="text/javascript" src="js/validacao.js"></script>

<?php
include_once("control/admin/verificarPermissao.php");	
    $idVaga = $_GET['idVaga'];
    $sql = "SELECT * FROM vaga
        WHERE idVaga = $idVaga LIMIT 1";
    $conect = new Banco();
    $conect->abrir();
    $res = mysql_query($sql);
   // Exibe o resultado da nossa consulta
    while ($row = mysql_fetch_array($res)){
     
    // Zebramos nossa linha da tabela onde pegamos o cont dividimos por 2
    // se o resto for zero mostramos uma cor, se não for mostramos outra
?>
<h2 class="titulo">Atualizar Cadastro</h2>
<form class="form-login animated fadeInRight" id="formCadastro" action="control/admin/atualizarVaga.php" method="post" >
    <fieldset>		
        <legend><?php echo $row['idVaga'];?></legend>        
        <label for="valor">Valor(R$)</label>
        <input type="text" name="valor" id="valor" value="<?php echo $row['valor'];?>">                                        
        <input type="hidden" name="idVaga" id="idVaga" value="<?php echo $row['idVaga'];?>">        
        <input type="submit" name="atualizar" id="atualizar" value="Atualizar" placeholder="Entrar" class="entrar">						
    </fieldset>
</form>
    <?php } ?>