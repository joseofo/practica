<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Ejercicio1 php</title>
</head>
<body>
	
	<h1>Ejercicio 1: NOMBRE COMPUESTO</h1>

	<form action="#" method="POST">
		<input type="text" name="nombre">
		<input type="text" name="apellido1">
		<input type="text" name="apellido2">
		<input type="submit">
	</form>




   <?php 
    
    //Ejercicio1 

     // if (isset($_POST["nombre"])) {
         
     //    if (empty($_POST["nombre"])) {
     //    	echo"<p>Oye!Está vacio el nombre</p>";
     //    }
     //    if (empty($_POST["apellido1"])) {
     //    	echo"<p>Oye!Está vacio el apellido 1</p>";
     //    }
     //    if (empty($_POST["apellido2"])) {
     //    	echo"<p>Oye!Está vacio el apellido2</p>";
     //    }
     //    if (!empty($_POST["nombre"]) && !empty($_POST["apellido1"]) && !empty($_POST["apellido2"])) {
     //    	echo "<p>".$_POST["nombre"]." ".$_POST["apellido1"]." ".$_POST["apellido2"]."</p>";
     //    }
     //  
     // }
     
    
    // Ejercicio 2

   if (isset($_POST["nombre"])) {
         
         if (empty($_POST["nombre"])) {
          echo"<p>Oye!Está vacio el nombre</p>";
       } else if(is_numeric($_POST["nombre"])) {
            echo "<p>No acepta digitos, repita por favor</p>";
          }
         
       if (empty($_POST["apellido1"])) {
       echo"<p>Oye!Está vacio el apellido 1</p>";
       }
        if (empty($_POST["apellido2"])) {
         echo"<p>Oye!Está vacio el apellido2</p>";
       }
       if (!empty($_POST["nombre"]) && !empty($_POST["apellido1"]) && !empty($_POST["apellido2"])) {
         echo "<p>".ucfirst($_POST["nombre"])." ".ucfirst($_POST["apellido1"])." ".ucfirst($_POST["apellido2"])."</p>"; 
       }

    }

    ?>



</body>
</html>