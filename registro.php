<?php

$conexion=mysqli_connect("localhost","root","","integrador");

if(mysqli_connect_errno())
{echo "no se conectó";}
else {echo "se conectó";}



if(isset($_POST['registro'])){
    if(strlen($_POST['Nombre']) >= 1 && strlen($_POST['Apellido'])>= 1 && strlen($_POST['Correo']) >= 1 && strlen($_POST['Pasword'])>= 1){
      $name = trim($_POST['Nombre']);
      $apellido = trim($_POST['Apellido']);
      $correo = trim($_POST['Correo']);
      $contraseña = trim($_POST['Pasword']);
   
  
      $consulta = "INSERT INTO registro VALUES ('','$name','$apellido','$correo','$contraseña')";
      $resultado = mysqli_query($conexion,$consulta);
  
    
    }
  }

  $segunda = "SELECT * FROM registro";
  $segundoresultado = mysqli_query($conexio,$segunda);
  if($segundoresultado){
    while($row = $segundoresultado -> fetch_array()){
        $id2 = $row ['id'];
        $name2 = $row ['Nombre'];
        $apellido2 = $row ['Apellido'];
        $correo2 = $row ['Correo'];
        $contraseña2 = $row ['Pasword'];
    }
  }
  ?>
 
<div>
<h2> <?php echo $id2; ?> </h2>
<div> 
    <p>
        <b>ID: </b> <?php echo $id2 ?> <br>
        <b>Nombre: </b> <?php echo $name2 ?><br>
        <b>Apellido: </b><?php echo $apellido2 ?> <br>
        <b>Correo: </b> <?php echo $correo2 ?><br>

</p>
</div>