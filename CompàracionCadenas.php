<?php

function compararCadena(){
    $cadena1="angel";
    $cadena2="ANGEL";
    
    $respuestaComparacion= strcasecmp($cadena2, $cadena1);//COMPARANDO CADENAS
    
    if($respuestaComparacion){
        
        echo "las cadenas no coinciden valor: $respuestaComparacion <br><strong>Nota: si la comparacion devuelve false el valor sera -1</strong>";
    }else{
        echo "las cadenas son iguales valor: $respuestaComparacion <br><strong>Nota: si la comparacion devuelve true el valor sera 0</strong>";
    }
}

