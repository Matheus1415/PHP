<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP junto com HTML e JavaScript</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">

</head>
<body>
<br> <br> <br>
<div class="container">
  <div class="row">
      <div class="col-4">
        
      <img style="border-radius: 50%;" src="../img/usuario.png" class="img-thumbnail" alt="...">
      </div><!--col-4-->

      <div class="col-4">
      <form action="" method="post">
        <div class="mb-3">
          <input type="text" name="nota1" class="form-control" id="exampleFormControlInput1" placeholder="Digite sua nota parcial" 1 required>
        </div>
        
        <div class="mb-3">
          <input type="text"  name="nota2" class="form-control" id="exampleFormControlInput1" placeholder="Digite sua nota global" required>
        </div>
        
        <div class="mb-3">
          <input type="submit"  name="botao" class="btn bg-success text-light" value="Média">
        </div>       
        </form>

      </div><!--col-4-->

      <div class="col-4">
        <?php
          if(isset ($_POST['botao'])){//isset verifica se a ação
            $aluno = "matheus";
            $nota1 = $_POST['nota1'];
            $nota2 = $_POST['nota2'];
            $media = ($nota1 + $nota2)/2;
            
            if($media <= 5.9){
                echo '<div class="alert alert-danger" role="alert">O aluno '.$aluno.' estar muito lascado  :0 com a nota '.$media.'</div>';
            }else if(($media>6 ) && ($media<7.9)){
                echo  '<div class="alert alert-warning" role="alert"> O aluno '.$aluno.' passou raspando  :/ com a nota '.$media.'</div>';
            }else if(($media > 7.9) && ($media=10)){
                echo '<div class="alert alert-success" role="alert"> O aluno '.$aluno.' passou direto  :) com a nota '.$media.'</div>';
            }
          }
        ?><!--fecha PHP -->
      </div><!--col-4-->

  </div><!--row-->
    
</div><!--container-->
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/bootstrap.min.js"></script>


</body>
</html>