<?php
$datos = array(
    "nombre" => $_POST['nombre'],
    "apellido" => $_POST["apellido"],
    "email" => $_POST["email"],
    "telefono" => $_POST["telefono"]
);

echo "<h1>Datos Personales</h1>";
echo "<p>Nombre: " . $datos['nombre'] . "</p>";
echo "<p>Apellido: " . $datos['apellido'] . "</p>";
echo "<p>Email: " . $datos['email'] . "</p>";
echo "<p>Número de teléfono: " . $datos['telefono'] . "</p>";

?>