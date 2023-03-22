<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ativida de imc</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">

</head>
<body>
<br> <br>
<div class="container">
        
    <form action="" method="post">
        <div class="mb-3">
          <input type="text" name="peso" class="form-control" id="exampleFormControlInput1" placeholder="Digite seu pedo (KG)" 1 required>
        </div>
    
        <div class="mb-3">
          <input type="text"  name="altura" class="form-control" id="exampleFormControlInput1" placeholder="Digite sua altura" required>
        </div>
    
        <div class="mb-3">
          <input type="submit"  name="botao" class="btn bg-success text-light" value="IMC">
        </div>
        </form>
    
    <?php
    if(isset ($_POST['botao'])){//isset verifica se a ação
    $pessoa = "matheus";
    $peso = $_POST['peso'];
    $altura = $_POST['altura'];
    $imc =$peso/($altura * $altura);
    
    
    if($imc <= 29.9){
    echo '<div class="alert alert-danger" role="alert">O(A)'.$pessoa.' estar com peso abaixo, e este é seu peso  '.number_format($imc,2).'</div>';
    }else if(($imc>30) && ($imc<39.9)){
    echo  '<div class="alert alert-warning" role="alert">O(A) '.$pessoa.' estar com peso normal, este é seu peso  '.$imc.'</div>';
    }else if(($imc > 40) && ($imc=49.9)){
    echo '<div class="alert alert-success" role="alert"> O(A) '.$pessoa.' estar com obsidade 1 , e este é seu peso  '.$imc.'</div>';
    } else if(($imc > 50) && ($imc=59.9)){
    echo '<div class="alert alert-success" role="alert"> O(A) '.$pessoa.' estar com obsidade 2 , e este é seu peso  '.$imc.'</div>';
    }else if(($imc > 60) && ($imc>=69.9)){
    echo '<div class="alert alert-success" role="alert"> O(A) '.$pessoa.' estar com obsidade 3 , e este é seu peso  '.$imc.'</div>';
    }
    }
    
    ?>
</div><!--container-->

</body>
</html>