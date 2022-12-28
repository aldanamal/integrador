<?php
echo "hola mundo"
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Integrador</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<header>

    <nav class="nav">
        <img class="codo" src="codoacodo.png" alt="logo">
        <span class="bs">Conf Bs As</span>
        <span id="izquierda">
        <a  class="nav-link active" aria-current="page" href="index.html">La conferencia</a>
        <a class="nav-link" href="#oradores">Los oradores</a>
        <a class="nav-link" href="#sacar">El lugar y la fecha</a>
        <a class="nav-link" href="#conv">Conviértete en orador</a>
        <a class="nav-link" id="dis" href="comprar tickets.html">Comprar tickets</a>
      </span>
      </nav>
</header>

<body>
    <script src="scriptt.js"> </script>
<div class="row g-3 mar cen">
    <div class="borde">
        <b>Estudiante</b>
        <p>Tienen un descuento</p>
        <b>80%</b>
        <p>*presentar documentación</p>
    </div>
    <div class="borde">
        <b>Trainee</b>
        <p>Tienen un descuento</p>
        <b>50%</b>
        <p>*presentar documentación</p>
    </div>
    <div class="borde dis">
        <b>Junior</b>
        <p>Tienen un descuento</p>
        <b>15%</b>
        <p>*presentar documentación</p>
    </div>
</div>
<p class="centr">VENTA</p>    
<h1>VALOR DE TICKET $200</h1>
    <form class="mar" method="post">
        <div class="row g-3">
         <div class="col">
           <input name="Nombre" id="nombr" type="text" class="form-control" placeholder="Nombre" aria-label="Nombre">
         </div>
         <div class="col">
           <input name="Apellido" type="text" class="form-control" placeholder="Apellido" aria-label="Apellido">
         </div>
         <div class="col-12">
            <input name="Correo" type="email" class="form-control" id="inputAddress2" placeholder="Correo">
          </div>
          <div class="col-12">
            <input name="Pasword" type="password" class="form-control" id="inputAddress2" placeholder="Contraseña">
          </div>
          <input name="registro" class="btn btn-success me-md-2 col" type="submit" id="registro">Registro</input>
         
         
<?php
include("registro.php");
?>

       </div>
   <div class="row g-3">
    <div class="col">Cantidad </div>
    <div class="col">Categoría</div>
    </div>
    <div class="row g-3">
    <div class="col">
        <input id="cantidadentradas" type="text" class="form-control" placeholder="Cantidad">
    </div>
    <select id="categoria" class="form-select form-select-sm col" aria-label=".form-select-sm example">
        <option value="estudiante">Estudiante</option>
        <option value="trainee">Trainee</option>
        <option value="junior">Junior</option>
      </select>
   </div>
   <div id="totalapagar" class="alert alert-primary" role="alert">
    Total a Pagar: $ 
  </div>
  <div class="d-grid gap-2 d-md-flex justify-content-md-center">
    <button class="btn btn-success me-md-2 col-6" type="button" id="borrarboton" onclick="borrar()">Borrar</button>
    <button class="btn btn-success col-6" type="button" id="resumenboton" onclick="resumen()">Resumen</button>
  </div>
      </form> 
</body>

<footer>
    <div class="container">
      <div id="foo" class="row">
              <div class="col-1">
                <a class="nav-link" href="#">Preguntas frecuentes</a>
               </div>
               <div class="col-1">
                <a class="nav-link" href="#">Contáctanos</a>
               </div>
               <div class="col-1">
                <a class="nav-link" href="#">Prensa</a>
               </div>
               <div class="col-1">
                <a class="nav-link" href="#">Conferencias</a>
               </div>
               <div class="col-1">
                <a id="f" class="nav-link" href="#">Términos y condiciones</a>
               </div>
               <div class="col-1">
                <a class="nav-link" href="#">Privacidad</a>
               </div>
               <div class="col-1">
                <a class="nav-link" href="#">Estudiantes</a>
               </div>
              </div>
      </div>
  
  </footer>
  </html>