<?php

$frase = "Joel é Programador <br>";
echo $frase;
$novoNome = str_replace("Joel", "Irineu", $frase);
echo $novoNome;

$novaFrase = substr($frase, 0, 5);

echo $novaFrase.'<br>';

$fraseArray = explode(" ", $frase);

print_r($fraseArray);
echo '<br>';

$fraseimplode = implode(" ", $fraseArray);

echo $fraseimplode;
?>