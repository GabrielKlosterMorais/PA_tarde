<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>atv</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container space">
        <div class="metade esquerda">
            <img src="https://preview.redd.it/ugywjdjkaq961.png?width=640&crop=smart&auto=webp&s=07babfb3a6035911fbe7ff0446dec816c25cd8db" alt="gato gritando em puro sofrimento" width= "100%" height="100%" >
        </div>

        <div class="metade azul flex coluna">
            <form action="process.php" method="POST" onsubmit="return validarform()" class="form">
                <div class="umQuinto meioLinha meioColuna flex">
                    <input type="text" placeholder="nome" class="input" name="nome">
                </div>
            
                <div class="umQuinto meioLinha meioColuna flex">
                    <input type="text" placeholder="email" class="input" name="email">
                </div>
            
                <div class="umQuinto meioLinha meioColuna flex">
                    <input type="date" placeholder="data de nascimento" class="input" name="dataNascimento">
                </div>
            
                <div class="umQuinto meioLinha meioColuna flex">
                     <input type="text" placeholder="cpf" class="input" name="cpf">
                </div>
           
                <div class="umQuinto">
                    <div class="metadeHori flex meioLinha">
                        <input type="password" placeholder="senha" class="input" name="senha">
                    </div>
                    <div class="metadeHori flex meioLinha fimColuna">
                        <input type="submit" palaceholder="enviar" class="input1">
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>
</html>