<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 5</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $opcao=$_POST['opcao'];
        $saldo=100;
        $depositar=$_POST['depositar'];
        $sacar=$_POST['sacar'];
        $sair=$_POST['sair'] ?? "saldo";

        switch($opcao){
            case ($opcao == 1):
                echo ($saldo);
                break;
             case ($opcao == 2):
                $saldo = $saldo + $depositar;
                echo ($saldo);
                break;
             case ($opcao == 3):
                echo ($saldo);
                break;
             case ($opcao == 4):
                echo "saindo...";
                break;
            default:
             echo "Nota Invalida";
             
        }
    }
    ?>
     <div class="form-elementos">
    <h1>NOTA</h1>
    <form method= "POST">
    <label>Escolha uma opção:</label>
    <select name = "Operação">
        <option value = "1"> 1 - Ver Saldo</option>
        <option value = "2">  2 - Depositar </option>
        <option value = "3"> 3 - Sacar </option>
        <option value = "4">  4 - Sair </option>
    </select>
    <input type = "submit" value= "Verificar">
</form>
</div>
</body>
</html>