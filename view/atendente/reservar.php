<script language="javascript" type="text/javascript" src="js/jquery-2.1.3.min.js"></script>
<script src="js/validate/dist/jquery.validate.min.js"></script>
<script language="javascript" type="text/javascript" src="js/validacao.js"></script>

<?php
    $descontoDia= 20;
    $descontoDia= $descontoDia/100;
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

<h2 class="titulo">Reservar Vaga Nº <?php echo $row['idVaga'];?></h1><br>
<h2 class="titulo-list titulo">Valor p/ Dia - Desconto de <?php echo $descontoDia*100; ?>%
    <span>R$ <?php echo ($row['valor']*12)-(($row['valor']*12)*$descontoDia);?></span>
</h2>
<form class="form-login animated fadeInRight" id="formCadastro" action="control/admin/atualizarVaga.php" method="post" >
    <fieldset>		          
        <label for="valor">Data(Reserva para o dia inteiro)</label>
        <input type="date" name="valor" id="valor" class="data-form">                                        
        <input type="hidden" name="idVaga" id="idVaga" value="<?php echo $row['idVaga'];?>">        
        <input type="submit" name="atualizar" id="atualizar" value="Atualizar" placeholder="Entrar" class="entrar">						
    </fieldset>
</form>
    <?php } ?>