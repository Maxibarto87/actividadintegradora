<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>clientes</title>
</head>
<body>
     <div>
         <form action="clientes.php" method="post">
                CLIENTES <br><br>
                cl_Nombre<input type="text" name="cl_Nombre"><br><br>
                cl_Apellido<input type="text" name="cl_Apellido"><br><br>
                cl_Email<input type="email" name="cl_Email"><br><br>
                cl_Direccion<input type="text" name="cl_Direccion"><br><br>
                cl_CUIT<input type="number" name="cl_CUIT"><br><br>
                cl_Telefono<input type="number" name="cl_Telefono"><br><br> 
                <input type="submit" value="enviar">
          </form>
     </div>
</body>
</html>

<?php

   include ("conexion.php");

    if (isset($_POST['cl_Nombre']) && !empty($_POST['cl_Nombre']) && 
         isset($_POST['cl_Apellido']) && !empty($_POST['cl_Apellido']) &&
         isset($_POST['cl_Email']) && !empty($_POST['cl_Email']) &&
         isset($_POST['cl_Direccion']) && !empty($_POST['cl_Direccion']) &&
         isset($_POST['cl_CUIT']) && !empty($_POST['cl_CUIT']) &&
         isset($_POST['cl_Telefono']) && !empty($_POST['cl_Telefono'])) {
    	// code...

     $conn= mysqli_connect($servername,$username,$password,$database);
     mysqli_query($conn,("INSERT INTO cliente (cl_Nombre,cl_Apellido,cl_Email,cl_Direccion,cl_CUIT,cl_Telefono) VALUES('$_POST[cl_Nombre]','$_POST[cl_Apellido]','$_POST[cl_Email]','$_POST[cl_Direccion]','$_POST[cl_CUIT]','$_POST[cl_Telefono]')"));
     echo "datos insertados!!";


    }else {
    	echo "";
    }





?>