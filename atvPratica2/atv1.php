<?php
$peso = 64; 
$altura = 1.70;

if(($peso >= 50)&&($peso < 60)&&($altura < 1.69)){
        echo 'Você é da categoria Novato';
}else if(($peso >= 60)&&($peso < 80)&&($altura >= 1.70)&&($altura < 1.90)){
    echo 'Você é da categoria Proficional';
}else{
    echo'Você não se encaixa';
}


?>