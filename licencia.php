<?php 
$edad = intval(readline("escriba su edad\n")) ;

$licencia = ($edad >=18 ) ? readline ("¿tiene licencia para conducir? \n ") : "" ;
echo  ($edad >=18 ) ? (($licencia == "si" ) ? "puedes conducir " : "necesitas sacar la licencia para conducir") : "no puedes conducir";


?>