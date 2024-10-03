<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../ex004/style.css">
    <title>Analisando</title>
</head>
<body>
    <main>
        <h1>Analisando o numero</h1>
        <?php
            $num = $_POST["n"] ?? 0;
            echo "<p><strong>O número inserido pelo usuário foi o ".number_format($num, 3, ",", ".")." </p> </strong>";

            $int = (int) $num;
            $frac = $num - $int;
            echo "<p>O número inteiro é: $int</p>";
            echo "A parte fracionaria é: ".number_format($frac, 3)."</p>";
        ?>
        <button><a href="index.html">Voltar</a></button>
    </main>
</body>
</html>