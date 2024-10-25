<script>
import LogoutButton from "./LogoutButton";
function Redirect(){
  location.href = 'https://localhost:5173';
}
</script>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../LoginSignUp.css">
    <title>Login</title>
</head>

  <body><form method="POST" action="altas_reporte_back.php">
  <button class='boton' onclick="Redirect()">Subir</button>
   <div class='Container'>
      
      <div class='header'>
        <div class='text'>Alta de reporte</div>
        <div class='underline'></div>
    </div>
    <div class='inputs'>
      <div class='input'>
      <input type='text' placeholder='Nombre del negocio' id='Nombre_negocio' name='Nombre_negocio'/>
      </div>
      <div class='input'>
      <p><label for="Tamaño">Tamaño del negocio: </label>
      <select name="Tamaño" id="Tamaño" class="Desplegable">
        <option value='Microempresa'>Microempresa</option>
        <option value='Macroempresa'>Macroempresa</option>
      </select>
      </div>
      <div class='input'>
      <input type='text' placeholder='Tipo de seguridad' id='Tipo_seguridad' name='Tipo_seguridad'/>
      </div>
      <div class='input'>
      <input type='text' placeholder='Tipo del negocio (A que se dedica)' id='Tipo_negocio' name='Tipo_negocio'/>
      </div>
      <div class='input'>
      <input type='text' placeholder='Calle' id='Calle' name='Calle'/>
      </div>
      <div class='input'>
      <input type='text' placeholder='Fraccionamiento' id='Fraccionamiento' name='Fraccionamiento'/>
      </div>
      <div class='input'>
      <input type='text' placeholder='Numero' id='Numero' name='Numero'/>
      </div>
      <div class='input'>
      <p><label for="Fecha">Fecha del robo: </label>
      <input type='date' placeholder='Fecha' id='Fecha' name='Fecha'/>
      </div>
      <div class='input'>
      <p><label for="Hora">Hora del robo: </label>
      <input type='time' placeholder='Hora' id='Hora' name='Hora'/>
      </div>
      <div class='input'>
      <p><label for="Arma">Tipo de arma: </label>
      <select name="Arma" id="Arma" class="Desplegable">
        <option value='Arma blanca'>Arma blanca</option>
        <option value='Arma de fuego'>Arma blanca</option>
      </select>
      </div>
      <div class='inputbtn'><button class='boton' type='sumbit' >Subir</button></div>
    </div>
</body>

</html>