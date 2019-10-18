<html>
  <head>
    <title>Abrir Chamado</title>
    <link rel="stylesheet" type="text/css" href="http://localhost/CI-611/assets/abrirChamado2.css">
    
  </head>
  <body>
    <div id="chamado">
    <form id="formulario"  method="POST" action="http://localhost/CI-611/index.php/Cliente/ClienteChamado/registrarChamado">
      <fieldset>
        <label id="label">Chamado</label><br>
        <textarea class="mensagem" name="chamado" required></textarea><br><br><br><br><br><br><br><br><br>
        <label id="label">Dia: 
          <?php 
            date_default_timezone_set('America/Sao_Paulo'); 
            echo date("d/m/Y")." Hora: ".date("H:i");
          ?>
        </label>
        <input class="btn_submit" type="submit" value="Enviar Chamado">
      </fieldset>
    </form>
</body>
</html>