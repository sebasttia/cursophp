<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
</head>
<body>
    <head>
        <h1>Resultado do processamento</h1>
    </head>
    <main>
        <?php 
          $n = $_GET["n"];
          $s = $_GET["s"];
          echo "<p>É um prazer te conhecer, <strong>$n $s !</strong> Este é o meu site!";
        ?>
        <p><a href="javascript:history.go(-1)">Voltar para a página anterior</a></p>
    </main>
</body>
</html> 