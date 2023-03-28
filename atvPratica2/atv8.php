<?php
$nota1 = 10;
$nota2 = 8;
$media = ($nota1+$nota2)/2;

if(($media >= 8)&&($media = 10)){
    echo'Você é um aluno nota A';
}else if (($media >= 7)&&($media <= 7.9)){
    echo'Você é um aluno nota B';
}else if (($media >= 6)&&($media <= 6.9)){
    echo'Você é um aluno nota C';
}else if (($media >= 5)&&($media <= 5.9)){
    echo'Você é um aluno nota D';
}else if (($media = 0)&&($media <= 4.9)){
    echo'Você é um aluno nota D';
}else{
    echo'Você é um aluno nota F';
}



?>