<script>
    function selecionaAction(valor){
      $_POST[""];
      document.actionJava.action = 'http://localhost/CI-611/index.php/Cliente/ClienteChamado/verConversa';
      document.actionJava.submit();
    }
</script>
<html>
  <head>
    <title>Ver Chamados</title> 
    <link rel="stylesheet" type="text/css" href="http://localhost/CI-611/assets/chamados.css">
  </head>
  <body> 
    <div id="perfil">
      <form id="dados" autocomplete="off" method="POST" action="actionJava">
          <?php foreach($chamados as $chamado):?>
          <button type="submit" onclick="selecionaAction('$chamado');"><label><b><?php echo $chamado->nome."</b><br>".$chamado->chamado?></label></button> 
        <?php endforeach ?>
      </form>
    </div>
</body>
</html>