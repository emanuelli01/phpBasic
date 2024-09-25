<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../ex004/style.css">
</head>
<body>
    <main>
        <h1>Resultado final</h1>
        <?php 
            $numero = $_GET["numero"]; 
            if (isset($numero) && is_numeric($numero)){
                               
                echo "Seu antecessor é " . $numero - 1;
                echo "<br><strong>O número escolhido foi $numero</strong>";
                echo "<br>Seu sucessor é: " . $numero + 1; 
            } else {
                echo "Digite um valor valido";
            }
        ?>
        <button><a href="index.html">Voltar</a></button>
        
        
    </main>
</body>
</html>