function comprobar() {
  let nombre=document.getElementById('nombre').value;
  let apellidos=document.getElementById('apellidos').value;
  let equipo=document.getElementById('equipo').value;
  let edad=document.getElementById('edad').value;
  let canastas=document.getElementById('NCanastas').value;
  var error=true;
  document.getElementById('nombreOculto').style.display = 'none';
  document.getElementById('apellidoOculto').style.display = 'none';
  document.getElementById('Equipo0culto').style.display = 'none';
  document.getElementById('edadOculto').style.display = 'none';
  document.getElementById('numOculto1').style.display = 'none';
  document.getElementById('NCanastasOculto').style.display = 'none';
  document.getElementById('numOculto2').style.display = 'none';

  if(nombre==""){
      document.getElementById('nombreOculto').style.display = 'block';
      error=false;
    }
    if (apellidos=="") {
      document.getElementById('apellidoOculto').style.display = 'block';
      error=false;
    }
    if (equipo=="") {
      document.getElementById('Equipo0culto').style.display = 'block';
      error=false;
    }
    if (edad=="") {
        document.getElementById('edadOculto').style.display = 'block';
        error=false;
    }
    if (isNaN(edad)) {
      document.getElementById('numOculto1').style.display = 'block';
      error=false;
    }
  if (canastas=="") {
      document.getElementById('NCanastasOculto').style.display = 'block';
      error=false;
  }
    if (isNaN(canastas)) {
      document.getElementById('numOculto2').style.display = 'block';
      error=false;
    }
    if (error==false) {
      return false;
    }
}
