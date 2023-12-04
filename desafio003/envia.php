<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor</title>
    <link rel="stylesheet" href="style.css">
    <style>
      
        a {
            display: block;
            font-size: 1em;
            width: 100%;
            height: 40px;
            background-color: blue;
            color: white;
            border: none;
            border-radius: 5px;
            text-align: center;
            cursor: pointer;
        }
    </style>
</head>
<body>
        <main>
            <h1>Conversor de Moedas</h1>
                <?php
                    $r = $_GET["r"] ?? 0;
                    $cotaçao = 5.17;
                    $dollar = $r / $cotaçao;
                    $padrao = numfmt_create("pt-BR", NumberFormatter::CURRENCY);

                    echo "<p>Seus " . numfmt_format_currency($padrao, $r, "BRL") . " equivalem a <strong>" .  numfmt_format_currency($padrao,$dollar, "USD") . "</strong></p>";
                ?>
                <button onclick="javascript:history.go(-1)">⬅ Voltar</button>
        </main>
</body>
</html>