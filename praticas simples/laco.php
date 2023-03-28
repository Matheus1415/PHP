    <!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laços de repetição</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">

</head>
<body>
    
<h1>Laços e estruturas de repetição</h1>

<?php

$i = 1;

echo 'essa é a linha '.$i.'<br>';

for($e=1;$e <= 5;$e++){
    echo $e.'<br>';
}

echo '<hr>'.'Estrutura while'.'<br>'.'<br>';
$a = 1;

while($a <= 5){
    echo 'Essa linha é '.$a.'<br>';
    $a++;
}

echo '<hr>'.'Estrutura DO while'.'<br>'.'<br>';

$c = 1;

do{
    echo 'Essa linha é '.$c.'<br>';
    $c++;

}while($c <= 10);

echo '<hr>'.'Estrutura DO while decrecente'.'<br>'.'<br>';

$d = 10;

do{
    echo 'Essa linha é '.$d.'<br>';
    $d--;

}while($d > 0);

?><!--fecha php-->

</body>
</html>