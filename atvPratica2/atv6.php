<?php
$cargo = "Gerente";// "Analista" "Tecnico"
$salario;

if($cargo == "Gerente"){
    $salario= 4000;
    echo 'seu salario era de '.$salario.' e agora é de '.($salario+400);

}else if($cargo == "Analista"){
    $salario= 3000;
    echo 'seu salario era de '.$salario.' e agora é de '.($salario+300);
}else if($cargo == "Tecnico"){
    $salario= 2000;
    echo 'seu salario era de '.$salario.' e agora é de '.($salario+200);
}else{
    $salario= 1500;
    echo 'seu salario era de '.$salario.' e agora é de '.($salario+150);

}

?>