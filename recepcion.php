<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST')

    $name = htmlspecialchars(trim($_POST["nombre"]));
$lastname = htmlspecialchars(trim($_POST["apellido"]));
$age = intval(trim($_POST["edad"]));

if (empty($name) || empty($lastname) || $age === 0) {
    echo "ERROR DEBE LLENAR TODOS LOS DATOS QUE SE LE PIDEN";
    exit;
}

$cantLetnombre = strlen($name);
$cantLetapellido = strlen($lastname);
$nameMay = strtoupper($name);
$lastnameMay = strtoupper($lastname);
$ageReverse = strval(strrev($age));

