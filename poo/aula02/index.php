<?php
// Public, private e static
include('exemplo.class.php');
$exemplo = new Exemplo();

// $exemplo -> var1 = 'olá'; // erro pois var1 é privada
$exemplo -> var2 = 'guilherme';

$exemplo2 = new Exemplo();

$exemplo2 -> var2 = 'joão';

$exemplo -> setVar1('joel');

echo $exemplo -> var2.'<br>'.$exemplo2 -> var2.'<br>
'.Exemplo::$var3.'<br>'.$exemplo -> pegaVar1();
?>