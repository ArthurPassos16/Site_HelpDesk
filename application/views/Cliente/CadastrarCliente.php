<html>
  <head>
    <title>Cadastro - Cliente</title>
    <link rel="stylesheet" type="text/css" href="http://localhost/CI-611/assets/cad.css">
  </head>
  <body>
  	<div id="area">
    <h2>Cadastro - Cliente</h2>
    <form id="formulario" autocomplete="off" method="POST" action="http://localhost/CI-611/index.php/Cliente/ControllerCliente/cadastrar">
      <div class="container">
      	<label for="uname"><b>Nome</b></label>
      	<input type="text" placeholder="Entre com o nome" name="nome" required>
      	<label for="uname"><b>Usuário</b></label>
      	<input type="text" placeholder="Entre com o usuário" name="usuario" required>

		    <label for="psw"><b>Senha</b></label>
      	<input type="password" placeholder="Entre com a senha" name="senha1" required>
      	<label for="psw"><b>Confirmar Senha</b></label>
      	<input type="password" placeholder="Entre com a senha" name="senha2" required>

     	<button type="submit">Cadastrar</button>
      <label for="uname"><center><a href="http://localhost/CI-611/index.php/Cliente/ControllerCliente/index">Voltar à página inicial</center></label><br>
      </div> 
    </form>
  	</div>
  </body>
</html>