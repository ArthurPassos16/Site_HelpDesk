<script>
    function selecionaAction(valor){
        document.actionJava.action = 'http://localhost/CI-611/index.php/Cliente/CLienteChamado/' + valor;
        document.actionJava.submit();
    }
</script>
<html>
  <head>
    <title>Perfil - Cliente</title>
    <link rel="stylesheet" type="text/css" href="http://localhost/CI-611/assets/perfil1.css">
  </head>
  <body>
    <div id="perfil">
      <form id="dados" autocomplete="off" method="POST" name="actionJava">
        <fieldset>
          <?php foreach($clientes as $cliente):?>
          <label><b>Nome:</b></label><br>
          <center><input type="text" value="<?php echo $cliente->nome;?>" name="nome" readonly="readonly"></center><br>
          <label><b>Usuário:</b></label><br>
          <center><input type="text" value="<?php echo $cliente->usuario;?>" name="usuario" readonly="readonly"></center><br>
          <label><b>Senha:</b></label><br>
          <center><input type="text" value="<?php echo $cliente->senha;?>" name="senha" readonly="readonly"></center><br><br><br> 
        <?php endforeach ?>
          <center>
            <button type="submit" onclick="selecionaAction('alterarPerfil');">Alterar</button>
            <button type="submit" onclick="selecionaAction('excluirPerfil');">Excluir</button>
          </center>
        </fieldset>
      </form>
    </div>
</body>
</html>