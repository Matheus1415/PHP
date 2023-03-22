<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IMC estilizado</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">


</head>
<body>
<main>
  <div class="container py-4">
    <div class="row align-items-md-stretch">
      <div class="col-md-6">

        <div class="h-100 p-5 text-bg-dark rounded-3">
        <h2>Veja aqui seu IMC</h2>
          <p>Or, keep it light and add a border for some added definition to the boundaries of your content. Be sure to look under the hood at the source HTML here as we've adjusted the alignment and sizing of both column's content for equal-height.</p>

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
        </div>
      </div>

      <div class="col-md-6">
        <div class="h-100 p-5 bg-light border rounded-3">
        <h2>Resultado do seu IMC</h2>
          <p>Or, keep it light and add a border for some added definition to the boundaries of your content. Be sure to look under the hood at the source HTML here as we've adjusted the alignment and sizing of both column's content for equal-height.</p>
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
        </div>
      </div>
    </div>

    <footer class="pt-3 mt-4 text-muted border-top">
      &copy; 2023
    </footer>
  </div>
</main>
</body>
</html>