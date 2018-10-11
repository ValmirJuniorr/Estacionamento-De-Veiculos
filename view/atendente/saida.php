<script language="javascript" type="text/javascript" src="js/jquery-2.1.3.min.js"></script>
<script src="js/validate/dist/jquery.validate.min.js"></script>
<script language="javascript" type="text/javascript" src="js/validacao.js"></script>

<?php
function calcularIntervaloHoras($horaInicio, $horaFim)
{
    $intervalo = $horaInicio->diff($horaFim);

    if ($intervalo->invert == 1) {
        $horaFim->add(new DateInterval('P1D'));
        $intervalo = $horaInicio->diff($horaFim);
    }

    return $intervalo;
}
session_start();
    $idVaga = $_GET['idVaga'];
    $saida = date('Y-m-d H:i:s');

    $sql = "SELECT * FROM locacao
  INNER JOIN vaga ON locacao.idVaga = vaga.idVaga WHERE locacao.idVaga LIKE '%$idVaga%'
  ORDER BY locacao.entrada DESC LIMIT 1";
    $conect = new Banco();
    $conect->abrir();
    $atualizar_sql = mysql_query("UPDATE vaga SET status = '0' WHERE idVaga = '$idVaga'") or die(mysql_error());
    $atualizar_loca = mysql_query("UPDATE locacao SET saida = '$saida' WHERE idVaga = '$idVaga' ORDER BY idLocacao DESC LIMIT 1") or die(mysql_error());

    $res = mysql_query($sql);
   // Exibe o resultado da nossa consulta
    while ($row = mysql_fetch_array($res)) {
        $entrada = new DateTime($row['entrada']);
        $saida = new DateTime($row['saida']);
        $diferenca = calcularIntervaloHoras($entrada, $saida);

        // Zebramos nossa linha da tabela onde pegamos o cont dividimos por 2
        // se o resto for zero mostramos uma cor, se não for mostramos outra ?>
<h2 class="titulo">Locação da Vaga Nº <?php echo $row['idVaga']; ?></h1><br>
<h2 class="titulo-list titulo">Valor por hora<span>R$ <?php echo $row['valor']; ?></span>
<h2 class="titulo-list titulo">ID do Cliente <span><?php echo $row['idCliente']; ?></span>
<h2 class="titulo-list titulo">Entrada <span><?php echo $entrada->format('d/m/Y H:i:s')?></span>
<h2 class="titulo-list titulo">Saída <span><?php echo $saida->format('d/m/Y H:i:s'); ?></span>
<h2 class="titulo-list titulo">Placa <span><?php echo $row['placa']; ?></span>
<h2 class="titulo-list titulo">Total à pagar <span>R$ <?php echo($diferenca->h) * $row['valor']; ?></span>
</h2>
    <a href="index.php" class="entrar confi-saida reservar">Confirmar</a>
<?php
    }
?>