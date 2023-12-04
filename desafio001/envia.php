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
            display: block;
            font-size: 1em;
            width: 100%;
            height: 40px;
            background-color: rgb(0, 0, 0);
            color: white;
            border: none;
            border-radius: 5px;
            text-align: center;
            cursor: pointer;
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
          $ant = ($n - 1);
          $suc = $n + 1;
          echo "O seu antecessor é $ant";
          echo"<p>O seu sucessor é $suc</p>";
        ?>
        <p><a href="javascript:history.go(-1)"> ⬅️Voltar </a></p>
    </main>
</body>
</html> 