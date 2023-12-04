<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gerandor de numero</title>
  <link rel="stylesheet" href="style.css">
  <style>
    h1 {
      text-align: center;
    }
  </style>
</head>
<body>
  <main>
    <h1>Trabalhando com número aleatórios</h1>
      <?php
      $min = 0;
      $max = 108;
      $num = mt_rand($min, $max);
      echo "<p>Gerando um número aleaotório entre $min e $max....<br>O número gerado foi <strong>$num</strong></p>";
      ?> 
      <button onclick="javascript:document.location.reload()">&#x1F504; Gera outro</button>
  </main>
</body>
</html>