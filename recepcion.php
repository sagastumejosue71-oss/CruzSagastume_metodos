<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $name = htmlspecialchars(trim($_POST["nombre"]));
    $lastname = htmlspecialchars(trim($_POST["apellido"]));
    $age = intval(trim($_POST["edad"]));
    $email = htmlspecialchars(trim($_POST["email"]));

    if (empty($name) || empty($lastname) || $age === 0) {
        echo "ERROR DEBE LLENAR TODOS LOS DATOS QUE SE LE PIDEN";
        exit;
    }

    $cantLetnombre = strlen($name);
    $cantLetapellido = strlen($lastname);
    $nameMay = strtoupper($name);
    $lastnameMay = strtoupper($lastname);
    $nameMin = strtolower($name);
    $lastnameMin = strtolower($lastname);
    $ageReverse = strval(strrev($age));

    echo "<br>Cantidad de letras del nombre: " . $cantLetnombre;
    echo "<br>Cantidad de letras del apellido: " . $cantLetapellido;
    echo "<br>Nombre en mayúsculas: " . $nameMay;
    echo "<br>Apellido en mayúsculas: " . $lastnameMay;
    echo "<br>Nombre en Minuscula: " . $nameMin;
    echo "<br>Apellido en Minuscula: " . $lastnameMin;
    echo "<br>Email: " . $email;
    echo "<br>Edad : $age al revés: " . $ageReverse;

} else {
    echo "ERROR NO SE RECIBIERON DATOS";
}