<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 4</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $nome=$_POST['nome'];
        $senha=$_POST['senha'];
        if($nome == 'admin' && $senha == '1234'){
        echo "Login bem-sucedido";
        } else {
            echo "Login ou senha incorreto";
        }
    }
    ?>
     <div class="form-elementos">
    <h1>LOGIN</h1>
    <form method= "POST">
    <label for="text">Informe seu Login:</label>
    <input type = "text" name="nome"><br>
    <label for="number">Infome sua senha:</label>
    <input type = "password" name="senha"><br>
    <input type = "submit" value= "Verificar">
</form>
</div>
</body>
</html>