<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos primitivos em PHP</title>
</head>
<body>
    <h1>Teste de tipos primitivos</h1>
    <?php 
    // $num = 3e2;
    // echo "O valor da variavel é $num";
    
    // $v = "Sebastião Rocha";
    // var_dump($v);

    // $num = 9e9;
    // echo "O valor é $num";

    $casado = false;
    print "O valor para casado é ";
    var_dump($casado);
    ?>

    <br><br>
    
    <?php 
    $casado = true;
    print "O valor para casado é $casado";
    ?>

    <br><br>
    
    <?php 
    $casado = true;
    print "O valor para casado é ";
    var_dump($casado);
    ?>

    <br><br>

    <?php 
    $casado = false;
    print "O valor para casado é $casado";
    ?>

    <br><br>

    <?php
    $vet = [6, 2.5, "Maria", 3, false];
    var_dump($vet);
    ?>
   
    <br><br>

    <?php
    class Pessoa {
        private string $nome;
    }
    $p = new Pessoa;
    var_dump($p);
    ?><br><br>
</body>
</html>