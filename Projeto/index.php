<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
     <div class="container flex centro-coluna centro-linha">
     <form action="process.php" method="POST" onsubmit="return validarform()">
        
        <div class="quadrado-principal  ">
            <div class="div-34">
                <h1 class="flex alinha-text estiliza-fonte"></h1>Bem vindo de volta</h1>
                
            </div>
            <div class="div-4">
                <div class=" flex fim-coluna">
                    <div>
                        <img src="https://www.veryicon.com/icons/miscellaneous/rossi-icon-library/user-name-19.html" alt="Carregando">
                    </div>
                     <input class="input-style" type="text" placeholder="email" name="email">
                </div>
            </div>

            <div class="div-5 flex centro-coluna">
                <div>
                    <img src="https://pngtree.com/so/email" alt="Carregando">
                </div>
                <input class="input-style" type="password" placeholder="SENHA" name="senha">
            </div>

            <div class="div-6 flex comeco-coluna">
                 <div>
                    <img src="https://pngtree.com/so/icon-password" alt="carregando">
                 </div>
                 <input class="input-style" type="password" placeholder="CONFIRMAR SENHA" name="confirmaSenha">
            </div>

            <div class="div-7 flex comeco-coluna">
                <input type="submit" value="Enviar">
            </div>
        </div>
     </form>
     </div>
    <script src="script.js"></script>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de cadrastro</title>
</head>
<body>
    <h1>cadrastro de usuario</h1>
    
    <form action="process.php" method="POST" onsubmit="return validarform()">
        <input type="email" placeholder="email. . ." name="email">
        <input type="password" placeholder="senha. . ." name="senha">
        <input type="password" placeholder="confirmar senha. . ." name="confirmaSenha">
        <input type="submit" value="Enviar">
    </form>
    
</body>
</html>