<?php
$cotaçao = 5.17;

$real = 1000;

$dollar = $real / $cotaçao;

//echo "Seus R\$" . $real . " equivalem a US\$" . $dollar;

//echo " Seus R\$" . number_format($real, 2, ",", ".") . " equivalem a US\$" . number_format($dollar, 2, ",", ".");

$padrao = numfmt_create("pt-BR", NumberFormatter::CURRENCY);

echo "Seus " . numfmt_format_currency($padrao, $real, "BRL") . " equivalem a " . numfmt_format_currency($padrao, $dollar, "USD");

