<?php
$nota1 = 10;
$nota2 = 6;
$media = $nota1 - $nota2;
$frequencia = 8;
if(($media >= 8.5) && ($frequencia >= 7)){
    echo'Você ganhou a bolsa';
}else{
    echo'Você não pode obter a bolsa por falta de nota ou de frequencia escolar '.' sua frequencia '.$frequencia.' sua media '.$media;
}


?>