<?php 

$nombre_form = $_POST ['nombre'];
$apellido_form = $_POST ['apellido'];
$email_form = $_POST ['email'];
$mensaje_form = $_POST ['mensaje'];


//  Conexion a base de datos     odcBIm[W[c3T<q]H

// $conexion = mysqli_connect("localhost", "root", "", "programacion_web") or exit("No se pudo conectar a la base de datos");


$conexion = mysqli_connect("localhost", "id19629380_lucas", "odcBIm[W[c3T<q]H", "id19629380_programador_web") or exit("No se pudo conectar a la base de datos");




mysqli_query($conexion, "INSERT INTO consulta VALUES (DEFAULT, '$nombre_form', '$apellido_form', '$email_form', '$mensaje_form')");



mysqli_close($conexion);

header("location: contacto.php?ok");

?>