<html>
  <head>
    <title>Perfil - Cliente</title> 
    <link rel="stylesheet" type="text/css" href="http://localhost/CI-611/assets/perfil1.css">
  </head>
  <body> 
    <div id="perfil">
      <form id="dados" autocomplete="off" method="POST" action="http://localhost/CI-611/index.php/Cliente/ClienteChamado/salvarAlteracao">
        <fieldset>
          <?php foreach($clientes as $cliente):?>
          <label><b>Nome:</b></label><br>
          <center><input type="text" value="<?php echo $cliente->nome;?>" name="nome"></center><br>
          <label><b>Usuário:</b></label><br>
          <center><input type="text" value="<?php echo $cliente->usuario;?>" name="usuario"></center><br>
          <label><b>Senha:</b></label><br>
          <center><input type="text" value="<?php echo $cliente->senha;?>" name="senha"></center><br><br><br> 
        <?php endforeach ?>
            <button type="submit">Salvar</button>
        </fieldset>
      </form>
    </div>
</body>
</html>