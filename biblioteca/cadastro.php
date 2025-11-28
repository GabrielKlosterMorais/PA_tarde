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
            <input type="text" placeholder="titulo" name="titulo" class="input1" required>
            <input type="text" placeholder="autor" name="autor" class="input1" required>
            <input type="number" placeholder="ano" name="ano" class="input1" required>
            <select name="categoria" class="select" required>
                <option value="">categoria</option>
                <option value="terror">terror</option>
                <option value="romance">romance</option>
                <option value="fantasia">fantasia</option>
                <option value="didatico">didatico</option>
            </select>
            <input type="number" placeholder="quantidade" name="quantidade" class="input1" required>  
            <input type="submit" class="button">
            
        </div>
    </form>
</body>
</html>