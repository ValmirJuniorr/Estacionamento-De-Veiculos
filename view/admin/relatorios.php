<h1 class="titulo">Relatórios</h1>
<br>
<br>

<h2 class="titulo-list titulo">Total de Atendentes <span>
  <?php	

    // Executa a cláusula SQL
    //Executa a consulta
     if (isset($_POST['busca'])) {
         $busca = $_POST['busca'];
     } else {
         $busca = '';
     }
    $sql = 'SELECT idEmpregado FROM empregado WHERE tipo <> 1';
    $conect = new Banco();
    $conect->abrir();
    $res = mysql_query($sql);
    echo mysql_affected_rows();
?>  
  </span></h2>
<hr>
<h2 class="titulo-list titulo">Total de Clientes
    <span>
    <?php
$sql = 'SELECT cliente.idCliente FROM cliente
  INNER JOIN usuario ON usuario.idUsuario = cliente.idUsuario';
    $conect = new Banco();
    $conect->abrir();
    $res = mysql_query($sql);
    echo mysql_affected_rows();
    ?>
    </span>
</h2>
<hr>
<h2 class="titulo-list titulo">Total de Vagas
    <span>
        <?php
        $sql = 'SELECT idVaga FROM vaga';
        $conect = new Banco();
        $conect->abrir();
        $res = mysql_query($sql);
        echo mysql_affected_rows();
        ?>
    </span>
</h2>
<hr>
