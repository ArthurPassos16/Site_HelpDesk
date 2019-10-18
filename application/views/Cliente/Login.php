<html>
  <head>
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="http://localhost/CI-611/assets/loginn.css">
  </head>
  <body>
  	<div id="area">
    <h2>Login - Cliente</h2>
    <form id="formulario" autocomplete="off" method="POST" action="http://localhost/CI-611/index.php/Cliente/ControllerCliente/login">
      <div class="imgcontainer">
      	<img src="http://localhost/CI-611/assets/img/usuario.png" alt="Avatar" class="avatar">
      </div>
      <div class="container">
      	<label for="uname"><b>Usuário</b></label>
      	<input type="text" placeholder="Entre com o usuário" name="usuario" required>

		<label for="psw"><b>Senha</b></label>
      	<input type="password" placeholder="Entre com a senha" name="senha" required>

     	<button type="submit">Login</button>
      <label for="uname"><center><a href="http://localhost/CI-611/index.php/Cliente/ControllerCliente/exibirCadastro">Não é cadastrado?</a></center></label><br>
      <label for="uname"><center><a href="http://localhost/CI-611/index.php/Admin/ControllerAdmin/index">Área do administrador</a></center></label>
      </div>
    </form>
  	</div>
  </body>
</html>