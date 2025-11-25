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
            <div></div>
            <h1 class="corPrimaria">Cadastre seu livro</h1>
            <input type="text" placeholder="titulo" name="titulo">
            <input type="text" placeholder="autor" name="autor">
            <input type="number" placeholder="ano" name="ano">
            <select name="categoria">
                <option value="">categoria</option>
                <option value="terror">terror</option>
                <option value="romance">romance</option>
                <option value="fantasia">fantasia</option>
                <option value="didatico">didatico</option>
            </select>
            <input type="number" placeholder="quantidade" name="quantidade">  
            <input type="submit">
        </div>
    </form>
</body>
</html>