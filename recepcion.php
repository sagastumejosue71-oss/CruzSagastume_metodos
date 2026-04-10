<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST')

    $name = htmlspecialchars(trim($_POST["nombre"]));
$lastname = htmlspecialchars(trim($_POST["apellido"]));
$age = htmlspecialchars(trim($_POST["edad"]));