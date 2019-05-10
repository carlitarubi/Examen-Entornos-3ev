<?php
require "./../src/Conexion.php";

 ?>
        <!DOCTYPE html>
        <html>
        <head>
          <link rel="stylesheet" href="archivo.css">
        	<title>Insertar Jugadores</title>
        </head>
        <body>
        <form class="" action="" method="post" onsubmit="return comprobar();">
          <div class="recuadro uno">
            <div>
          Nombre:
            <p><input type="text" name="nombre" value="" id="nombre" ></p>
              <div id="nombreOculto" class="estilo" style='display:none;'>Debes rellenar este campo</div>
          Apellidos:
            <p><input type="text" name="apellidos" value="" id="apellidos" ></p>
              <div id="apellidoOculto" class="estilo" style='display:none;'>Debes rellenar este campo</div>
            </div>
          </div>
          <div class="recuadro dos">
            <div>
          Equipo:
            <p><input type="text" name="equipo" value="" id="equipo" ></p>
              <div id="Equipo0culto" class="estilo" style='display:none;'>Debes rellenar este campo</div>
          Edad:
            <p><input type="text" name="edad" value="" id="edad" ></p>
              <div id="edadOculto" class="estilo" style='display:none;'>Debes rellenar este campo</div>
              <div id="numOculto1"  class="estilo" style='display:none;'>Este campo debe ser un Numero</div>
            </div>
          </div>
          <div class="recuadro tres">
            <div>
          NCanastas:
          <p><input type="text" name="NCanastas" value="" id="NCanastas" ></p>
            <div id="NCanastasOculto"  class="estilo" style='display:none;'>Debes rellenar este campo</div>
            <div id="numOculto2"  class="estilo" style='display:none;'>Este campo debe ser un Numero</div>
          <br>
          <input type="submit" name="" value="Enviar" onclick="return comp(); window.location.href='PONER ESTO!!!!'"></input>
            </div>
          </div>
        </form>
        </body>
        </html>
