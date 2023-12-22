<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
    
    ?>
    <main>
        <h1>Reajustador de Preços</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="preco">Preço do Produto (R$)</label>
            <input type="number" name="preco" id="preco" min="0.10" step="0.01">
            <label for="reaj">Qual será o percentual de reajuste? <strong><span id="p">?%</span></strong></label>
            <input type="range" name="reaj" id="reaj" min="0" max="100" step="1">
            <input type="submit" value="Reajustar">
        </form>
    </main>
    <section>
        <?php 
        
        ?>
        <h2>Resultado do Reajuste</h2>
        <p>O produto que custava R$[], com <strong>[] de aumento</strong> Vai passar a custar <strong>R$[]</strong> a partir de agora.</p>
    </section>
</body>
</html>