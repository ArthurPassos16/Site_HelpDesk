<script>
    function selecionaAction(valor){
        document.actionJava.action = 'http://localhost/CI-611/index.php/Admin/AdminChamado/' + valor;
        document.actionJava.submit();
    }
</script>
<html>
  <head>
    <title>Perfil - Administrador</title>
    <link rel="stylesheet" type="text/css" href="http://localhost/CI-611/assets/perfil1.css">
  </head>
  <body>
    <div id="perfil">
      <form id="dados" autocomplete="off" method="POST" name="actionJava">
        <fieldset>
          <?php foreach($admins as $admin):?>
          <label><b>Nome:</b></label><br>
          <center><input type="text" value="<?php echo $admin->nome;?>" name="nome" readonly="readonly"></center><br>
          <label><b>Usuário:</b></label><br>
          <center><input type="text" value="<?php echo $admin->usuario;?>" name="usuario" readonly="readonly"></center><br>
          <label><b>Senha:</b></label><br>
          <center><input type="text" value="<?php echo $admin->senha;?>" name="senha" readonly="readonly"></center><br><br><br> 
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