<?php

if (isset ($_GET["terminos"]) && !empty ($_GET["terminos"])){ 

$terminos1 = htmlspecialchars(trim($_GET["terminos"]));
$categoria1= htmlspecialchars(trim($_GET["categoria"]));

$cantLetTermin = strlen ($terminos1);
$cantLetcat= strlen ($categoria1);
$Maytermin = strtolower($terminos1);
$maycategoy= strtolower($categoria1);

echo "<p> Resultados de la Busqueda </p>";
echo "<p> Busco el nombre de: " .$terminos1 . "  El es un :  .$categoria1 </p>";
echo "<p> la persona tiene " .$cantLetTermin . " Letras. </p>";
echo "<p> en minusculas el nombe es : " . $Maytermin ."</p>";

} else {
    echo "Debe Ingresar un termino. <a href='buscar.html'>Volver</a>";
}
?>