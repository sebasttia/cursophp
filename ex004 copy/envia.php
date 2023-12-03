<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
    <style>
        a {
            box-shadow: 20px;
            background-color: blue;
        }
    </style>
</head>
<body>
    <head>
        
    </head>
    <main>
        <h1>Resultado Final</h1>
        <?php 
          $n = $_GET["n"];
          echo "<p>O número escolhido foi <strong>$n </strong> </p>";
          $n = ($n - 1);
          print("O antesseco é $n");
          $n = ($n + 1);
          print("<p>O proximo é $n</p>");
        ?>
        <p><a href="javascript:history.go(-1)">Voltar </a></p>
    </main>
</body>
</html> 