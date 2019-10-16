<?php
    $altura = $_POST['altura'];
    $sexo = $_POST['sexo'];

    if($sexo == 1){
        ///sexo masculino
        $resultado = (72.7*$altura)-58;
    }

    else{
        ///sexo feminino
        $resultado = (62.1*$altura)-44.7;
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div>
    Seu peso ideal é <?php echo $resultado?>
    <div>
</body>
</html>