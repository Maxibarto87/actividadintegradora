<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>provedores</title>
</head>
<body>
     <div>
         <form action="proveedores.php" method="post">
          

                PROVEEDOR <br><br> 
                pr_Nombre_de_fantasia<input type="text" name="pr_Nombre_de_fantasia"><br><br>
                pr_Nombre<input type="text" name="pr_Nombre"><br><br>
                pr_Apellido<input type="text" name="pr_Apellido"><br><br>
                pr_Email<input type="email" name="pr_Email"><br><br>
                pr_Direccion<input type="text" name="pr_Direccion"><br><br>
                pr_CUIT<input type="number" name="pr_CUIT"><br><br>
                pr_Telefono<input type="tel" name="pr_Telefono"><br><br>
                <input type="submit" value="enviar"><br><br>
          </form>
     </div>
</body>
</html>

<?php

   include ("conexion.php");

    if (isset($_POST['pr_Nombre_de_fantasia']) && !empty($_POST['pr_Nombre_de_fantasia']) && 
         isset($_POST['pr_Nombre']) && !empty($_POST['pr_Nombre']) &&
         isset($_POST['pr_Apellido']) && !empty($_POST['pr_Apellido']) &&
         isset($_POST['pr_Email']) && !empty(['pr_Email']) &&
         isset($_POST['pr_Direccion']) && !empty(['pr_Direccion']) &&
         isset($_POST['pr_CUIT']) && !empty(['pr_CUIT']) &&
         isset($_POST['pr_Telefono']) && !empty(['pr_Telefono'])) {
      // code...

     $conn= mysqli_connect($servername,$username,$password,$database);
     mysqli_query($conn,("INSERT INTO proveedor (pr_Nombre_de_fantasia,pr_Nombre,pr_Apellido,pr_Email,pr_Direccion,pr_CUIT,pr_Telefono ) VALUES('$_POST[pr_Nombre_de_fantasia]','$_POST[pr_Nombre]','$_POST[pr_Apellido]','$_POST[pr_Email]','$_POST[pr_Direccion]','$_POST[pr_CUIT]','$_POST[pr_Telefono]')"));
     echo "datos insertados!!";


    }else {
      echo "";
    }





?>