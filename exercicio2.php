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
        $nota=$_POST['nota'];
        switch(true){
            case ($nota == 10):
                echo "Classificação A";
                break;
             case ($nota == 9 ):
                echo "Classificação B";
                break;
             case ($nota >= 7 && $nota <= 8):
                echo "Classificação C";
                break;
             case ($nota >= 5 && $nota <= 6):
                echo "Classificação D";
                break;
             case ($nota >= 0 && $nota <= 4):
                echo "Classificação E";
                break;
            default:
             echo "Nota Invalida";
             
        }
    }
    ?>
     <div class="form-elementos">
    <h1>NOTA</h1>
    <form method= "POST">
    <label for="number">Infome sua nota:</label>
    <input type = "number" name="nota" min="0" max="10">
    <input type = "submit" value= "Verificar">
</form>
</div>
</body>
</html>