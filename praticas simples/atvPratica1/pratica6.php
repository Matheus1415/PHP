<?php
$comisao = 1321.45;
$salario = 7600.25;
$total;
$inss = 608.45;
$irrf = 1364.65;

echo 'O salario de matheus é '.$salario.' com a comisão de '.$comisao.'e tem que pagar o INSS '.$inss.' e o IRRF '.$irrf.'<br>'.'<br>';
echo 'Valor inicial :'.number_format($total=$comisao+$salario,2).'<br>'.'<br>';

echo 'Valor total meno o INSS e IRRF é: '.number_format($total-($inss+$irrf),2);
?>

