<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>stocks</title>
</head>
<body>
     <div>
         <form action="stocks.php" method="post">
                STOCK <br><br>
                st_Nombre_del_producto<input type="text" name="st_Nombre_del_producto"><br><br>
                st_Precio_por_unidad<input type="number" name="st_Precio_por_unidad"><br><br>
                st_N_de_existencia<input type="number" name="st_N_de_existencia"><br><br>
                st_Categoria<input type="text" name="st_Categoria"><br><br>
                st_Cantidad_total_en_existencia<input type="number" name="st_Cantidad_total_en_existencia"><br><br>
                <input type="submit" value="enviar"><br><br>
          </form>
     </div>
</body>
</html>

<?php

   include ("conexion.php");

    if (isset($_POST['st_Nombre_del_producto']) && !empty($_POST['st_Nombre_del_producto']) && 
         isset($_POST['st_Precio_por_unidad']) && !empty($_POST['st_Precio_por_unidad']) &&
         isset($_POST['st_N_de_existencia']) && !empty($_POST['st_N_de_existencia']) &&
         isset($_POST['st_Categoria']) && !empty($_POST['st_Categoria']) &&
         isset($_POST['st_Cantidad_total_en_existencia']) && !empty($_POST['st_Cantidad_total_en_existencia'])) {
    	// code...

     $conn= mysqli_connect($servername,$username,$password,$database);
     mysqli_query($conn,("INSERT INTO stock (st_Nombre_del_producto,st_Precio_por_unidad,st_N_de_existencia,st_Categoria,st_Cantidad_total_en_existencia) VALUES('$_POST[st_Nombre_del_producto]','$_POST[st_Precio_por_unidad]','$_POST[st_N_de_existencia]','$_POST[st_Categoria]','$_POST[st_Cantidad_total_en_existencia]')"));
     echo "datos insertados!!";


    }else {
    	echo "";
    }





?>