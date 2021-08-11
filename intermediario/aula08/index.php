<?php
// funções de array
$arr1 = ['irineu', 'joel', 'joão'];
$arr2 = [20, 19, 13];
// serve para unir um ou mais arrays
$result = array_merge($arr1, $arr2);

print_r($result);
echo '<hr>';
// retorna valores com a mesma chave em varios arrays
$newResult = array_intersect_key($arr1, $result);

print_r($newResult);
echo '<hr>';
?>