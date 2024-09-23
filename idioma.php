<?php
$valor = $_GET["idioma"];

setcookie("idioma", $valor, 259200);

header("Location:index.php");