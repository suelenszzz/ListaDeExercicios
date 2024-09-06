<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $idade=$_POST['idade'];
        if($idade > 18){
        echo "Você não pode se cadastrar.";
        } else {
            echo"Cadastro permitido";
        }
    }
    ?>
     <div class="form-elementos">
    <h1>Cadastro</h1>
    <form method= "POST">
    <label for="nome">Infome sua idade:</label>
    <input type = "number" name="idade">
    <input type = "submit" value= "Verificar">
</form>
</div>
</body>
</html>