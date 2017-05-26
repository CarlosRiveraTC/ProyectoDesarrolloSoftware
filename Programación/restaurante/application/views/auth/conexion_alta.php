<html>
<body>

<?php

$tipo = $_POST['tipo'];
$nombre = $_POST['nombre'];
$precio = $_POST['precio'];
$ingredientes = $_POST['ingredientes'];
$tiempo_preparacion = $_POST['tiempo_preparacion'];

$conexion = mysql_connect("localhost","root","platillo");
$consulta = "INSERT INTO platillo VALUES"('$tipo','$tipo','$tipo','$tipo','$tipo');



?>


</body>
</html>