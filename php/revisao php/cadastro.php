<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <form action="process.php" method="POST" onsubmit="return validarform()">
        <div class="container">
           
            <h1 class="h1">Cadastre seu livro</h1>
            <input type="text" placeholder="nome" name="nome" class="input1" required>
            <input type="text" placeholder="email" name="email" class="input1" required>
            <input type="number" placeholder="senha" name="senha" class="input1" required>
            <input type="submit" class="button">
            
        </div>
    </form>
</body>
</html>