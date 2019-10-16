<?php
     $n1 = $_GET["nota1"];
     $n2 = $_GET["nota2"];
     $n3 = $_GET["nota3"];
  
     $media = ($n1 + $n2 + $n3)/3;
?>

<!DOCTYPE html>
<html lang="pt">
<head>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <title>Introdução PHP</title>
</head>
        <body>
            
            <form class="form-horizontal" style="padding: 15px;" method="GET" action="dados.php">
            <fieldset>
                    
                    <!-- Form Name -->
                    <legend>Calcular média</legend>
                    
                    <!-- Text input-->
                    <div class="form-group">
                    <label class="col-md-4 control-label" for="numero1">Nota 1</label>  
                    <div class="col-md-4">
                    <input id="nota1" name="nota1" type="text" placeholder="Digite o numero" class="form-control input-md" required="">
                        
                    </div>
                    </div>
                    
                    <!-- Text input-->
                    <div class="form-group">
                    <label class="col-md-4 control-label" for="numero2">Nota 2</label>  
                    <div class="col-md-4">
                    <input id="nota2" name="nota2" type="text" placeholder="Digite o numero" class="form-control input-md" required="">
                        
                    </div>
                    </div>

                     <!-- Text input-->
                    <div class="form-group">
                    <label class="col-md-4 control-label" for="numero3">Nota 3</label>  
                    <div class="col-md-4">
                    <input id="nota3" name="nota3" type="text" placeholder="Digite o numero" class="form-control input-md" required="">
                                
                    </div>
                    </div>
                    
                    <!-- Button -->
                    <div class="form-group">
                    <label class="col-md-4 control-label" for="calcular"></label>
                    <div class="col-md-4">
                        <button id="calcular" name="calcular" class="btn btn-primary">Calcular</button>
                    </div>
                    </div>
                    
                    </fieldset>
            </form>

            <div style="padding: 15px;"> Resultado: <?php echo $media; ?> </div>
             
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        </body>
</html>