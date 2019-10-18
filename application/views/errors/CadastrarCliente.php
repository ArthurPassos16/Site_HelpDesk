<html>
  <head>
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="http://localhost/CI-611/assets/cadastro.css">
  </head>
  <body>
  	<div id="area">
    <h2>Cadastro</h2>
    <form id="formulario" autocomplete="off" method="POST" action="http://localhost/CI-611/index.php/ControllerMenu">
      <div class="container">
      	<label for="uname"><b>Nome</b></label>
      	<input type="text" placeholder="Entre com o nome" name="uname" required>

      	<label for="uname"><b>Usuário</b></label>
      	<input type="text" placeholder="Entre com o usuário" name="uname" required>

		<label for="psw"><b>Senha</b></label>
      	<input type="password" placeholder="Entre com a senha" name="psw" required>

      	<label for="psw"><b>Confirmar Senha</b></label>
      	<input type="password" placeholder="Entre com a senha" name="psw" required>

     	<button type="submit">Cadastrar</button>
      </div>
    </form>
  	</div>
  </body>
</html>