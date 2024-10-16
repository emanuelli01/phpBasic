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
        <h1>Calculando Idade</h1>
        <form action="<?$_SERVER['PHP_SELF']?>" method="post">
            <label for="ano">Ano de nascimento</label>
            <input type="number" name="ano" id="ano">
            <label for="idadeFuturo">Quer saber sua idade em que ano?</label>
            <input type="number" name="idadeFuturo" id="idadeFuturo">

            <input type="submit" value="Calcular">
        </form>
    </main>
    <section>
        <h1>Resultado</h1>
        <?php
            if(isset($_POST['ano']) && isset($_POST['idadeFuturo'])){
                if(is_numeric($_POST['ano']) && is_numeric($_POST['idadeFuturo'])){
                    $ano = $_POST['ano'];
                    $idadeFuturo = $_POST['idadeFuturo'];           
                    $r = $idadeFuturo - $ano;
            
                    echo "Quem nasceu no ano de $ano vai ter <strong>$r anos</strong> em $idadeFuturo!";
                }
            } else {
                echo "";
            }

        ?>
    </section>
</body>
</html>