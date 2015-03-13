<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="css/login.css" type="text/css"/>
        <script src="jquery.js"></script>
        <script type="text/javascript">
            $(function(){
     $('.login').submit(function(){
          $.ajax({
          type: 'POST',
          url: 'Verifica_login.php',
          data: $('.login').serialize(),
           success: function( data ){
             if(data){
                $('.recebe').html(data);
               }
             }
            });
        return false;
      });
});
        
        
        
        </script>
    </head>
    <body>
        <div class="recebe"></div>
     <form class="login" action="" method="post">
         <div id="geral">
             <p>Parking Maneger</p>
             <span>Nome</span>
                <input id="nome" type="text" name="nome"/><br>
             <span>Senha</span>
             <input id="senha" type="password" name="senha"/><br>
             <input id="login" type="submit" value="Login"/>
             <input id="limpa" type="submit" value="Limpa"/>
        </div>
    </form>
    </body>
</html>
