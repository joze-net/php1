<?php

$usuario=$_POST["usuario"];
$contraseña=$_POST["contraseña"];

/*if($usuario=='jose' && $contraseña=='1234'){
    echo "<h1>bienvenido $usuario</h1>";
}else{
    echo "<h1>usuario no existe</h1>";
}*/

//ej de uso de operardor ternario
$resultado= $usuario=="jose" && $contraseña=="1234" ? "bienvenido":"usuario no existe";
echo "<h1> $resultado </h1>";



