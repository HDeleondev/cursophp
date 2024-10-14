<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Resultado Final</h1> 
        <p>
            <?php 
                $n = $_REQUEST["num"] ?? 0; 
                $a = $n - 1;
                $s = $n + 1;
                echo "O número escohido foi <strong>$n</strong>";
                echo "<br> O seu <em>antecessor</em> é $a"; // em = italico
                echo "<br> O seu <em>sucesso</em> é $s"; // em = italico
            // "javascript:window.location.href='index.html'" = volta a pag anterior
            ?>
        </p>
        <button onclick="javascript:history.go(-1)">&#x2B05Voltar</button> 


    </main>
</body>
</html>