<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="exercicio1/style.css">
</head>
<body>
    <?php
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $numero=$_POST['numero'];
        if($numero % 2 == 0){
        echo "O número $numero é par";
        } else {
            echo"O numero é impar";
        }
    }
    ?>
     <div class="form-elementos">
    <h1>TESTE</h1>
    <form method= "POST">
    <label for="number">Infome sua idade:</label>
    <input type = "number" name="numero">
    <input type = "submit" value= "Verificar">
</form>
</div>
</body>
</html>