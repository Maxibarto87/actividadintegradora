<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>categorias</title>
</head>
<body>
     
    <div>
         <form action="categorias.php" method="post">
                CATEGORIA <br><br>
                ct_Nombre_categoria<input type="text" name="ct_Nombre_categoria"><br><br>
                ct_Descripcion_categoria<input type="text" name="ct_Descripcion_categoria"><br><br>
                <input type="submit" value="enviar"><br><br>
          </form>
     </div> 
</body>
</html>

<?php

   include ("conexion.php");

    if (isset($_POST['ct_Nombre_categoria']) && !empty($_POST['ct_Nombre_categoria']) && 
         isset($_POST['ct_Descripcion_categoria']) && !empty($_POST['ct_Descripcion_categoria'])) {
    	// code...

     $conn= mysqli_connect($servername,$username,$password,$database);
     mysqli_query($conn,("INSERT INTO categoria (ct_Nombre_categoria,ct_Descripcion_categoria) VALUES('$_POST[ct_Nombre_categoria]','$_POST[ct_Descripcion_categoria]')"));
     echo "datos insertados!!";


    }else {
    	echo "";
    }





?>