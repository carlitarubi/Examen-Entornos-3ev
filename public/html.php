<?php
require "../src/Conexion.php";

 ?>
        <!DOCTYPE html>
        <html>
        <head>
        	<title></title>
        </head>
        <body>
          <script type="text/javascript" src="../comprobar.js"></script>
        <form class="" action="" method="post" onsubmit="return comprobar();">
          Nombre:
            <p><input type="text" name="nombre" value="" id="nombre" ></p>
              <div id="nombreOculto" class="estilo" style='display:none;'>Debes rellenar este campo</div>
          <br><br>
          Apellidos:
            <p><input type="text" name="apellidos" value="" id="apellidos" ></p>
              <div id="apellidoOculto" class="estilo" style='display:none;'>Debes rellenar este campo</div>
          <br><br>
          Equipo:
            <p><input type="text" name="equipo" value="" id="equipo" ></p>
              <div id="Equipo0culto" class="estilo" style='display:none;'>Debes rellenar este campo</div>
          <br><br>
          Edad:
            <p><input type="text" name="edad" value="" id="edad" ></p>
              <div id="edadOculto" class="estilo" style='display:none;'>Debes rellenar este campo</div>
              <div id="numOculto1"  class="estilo" style='display:none;'>Este campo debe ser un Numero</div>
          <br><br>
          NCanastas:
          <p><input type="text" name="NCanastas" value="" id="NCanastas" ></p>
            <div id="NCanastasOculto"  class="estilo" style='display:none;'>Debes rellenar este campo</div>
            <div id="numOculto2"  class="estilo" style='display:none;'>Este campo debe ser un Numero</div>
          <br>
          <input type="submit" name="" value="Enviar" onclick="return comp(); window.location.href='PONER ESTO!!!!'"></input>
          <script type="text/javascript" src="js.js">
          </script>
        </form>
        </body>
        </html>
