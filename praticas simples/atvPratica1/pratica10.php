<?php
$produto = 280.74 ;
$parcela = 305.11 ;


echo 'A empresa vendeu 58 unidades do produto por '.$produto.' cada um o mes de Junho'.'<br>'.'<br>';
echo 'A primeira parcela foi de '.$parcela.'<br>'.'<br>';
echo 'A primeira segunda foi de '.number_format($parcela*2,2).'<br>'.'<br>';
echo 'A primeira terceira foi de '.number_format($parcela*3,2).'<br>'.'<br>';

echo 'Valor total de vendas no mês de junhofoi de '.number_format($produto*58,2,',','.');

?>

