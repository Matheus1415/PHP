<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Noata do aluno estilizada</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet">

</head>
<body>

<main>
  


    </div>

    <div class="row align-items-md-stretch">
      <div class="col-md-6">
        <div class="h-100 p-5 text-bg-dark rounded-3">
        <h1 class="display-5 fw-bold">Explicação<object data="" type=""></object></h1>
        <p class="style="width: 8rem;">Using a series of utilities, you can create this jumbotron, just like the one in previous versions of Bootstrap. Check out the examples below for how you can remix and restyle it to your liking.</p>
          
            <form action="" method="post">

            <div class="mb-3">
                <input type="number" name="n1" class="form-control" id="exampleFormControlInput1" placeholder="Digite um numero qualquer" 1 required>
            </div>

            <div class="mb-3">
                <input type="number" name="n2" class="form-control" id="exampleFormControlInput1" placeholder="Digite um numero qualquer" 1 required>
            </div

            <div class="mb-3">
                <input type="submit"  name="botao" class="btn bg-success text-light" value="Enviar">
            </div>

            </form>
        </div>
      </div>

      <div class="col-md-6">
        <div class="h-100 p-5 bg-light border rounded-3">
            <?php
            if(isset ($_POST['botao'])){//isset verifica se a ação
                $number = $_POST['n1'];
                $number2 = $_POST['n2'];


                do{
                    echo 'Essa linha é '.$number.'<br>';
                    $number--;

                }while($number > 0);

                echo '<hr>';

                do{
                    echo 'Essa linha é '.$number2.'<br>';
                    $number2--;

                }while($number2 > 0);
            }
            ?><!--fecha PHP-->

        </div>
      </div>


</main>

<footer class="pt-3 mt-4 text-muted border-top">
      &copy; 2023
    </footer>


</body>
</html>