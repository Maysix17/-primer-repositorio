<?php

$articulos = intval(readline ("escriba la cantidad de articulos que va a llevar\n" )) ;
$valor_unitario = 500 ;

 $total = $articulos * $valor_unitario ;
$descuento = ($articulos >= 10) ? 0.1* $total :0 ;

echo  $total - $descuento ;





?>