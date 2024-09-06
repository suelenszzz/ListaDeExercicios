<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 3.2</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $num1=$_POST['num1'];
        $num2=$_POST['num2'];
        $operacao=$_POST['operacao'];
 
        switch($operacao){
            case '+':
               $resultado = $num1 + $num2;
                break;
             case '-':
                $resultado = $num1 - $num2;
                break;
             case '*':
                $resultado = $num1 * $num2;
                break;
             case '/':
                if($num2!=0){
                    $resultado = $num1 / $num2;  
                } else{
                    $resultado = "Divisão por 0!";
                }
                break;
            default:
             $resultado = "Operação invalida";
            } 
            echo "Resultado: $resultado";            
        }
    ?>
     <div class="form-elementos">
    <form method= "POST">
    <label for="number">Infome primeiro número:</label>
    <input type = "number" name="num1"><br>
    <label for="number">Infome o segundo número:</label>
    <input type = "number" name="num2"><br>
    <select name = "Operação">
        <option value = "+"> + </option>
        <option value = "-"> - </option>
        <option value = "*"> * </option>
        <option value = "/"> / </option>
    </select>
    <input type = "submit" value= "CALCULAR">
</form>
</div>
</body>
</html>