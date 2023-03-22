<?php
//VARIAVEL
$aluno = "matheus";
$nota1 = 6;
$nota2 = 9;
$media = $nota1 + $nota2;

//ENTRADA

echo "Sua média é: ".$media=($media/2)."<br>";
echo "A media do $aluno em matematíca é: ".$media;

if($media <= 5.9){
    echo "O aluno $aluno estar  e lascado {$aluno}";
}else if(($media>6 ) && ($media<7.9)){
    echo "O aluno $aluno passou raspando {$aluno}";
}else if(($media > 7.9) && ($media<=10)){
    echo "O aluno passou  direto"
}

?>