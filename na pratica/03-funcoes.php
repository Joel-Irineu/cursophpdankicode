<?php

function helloWorld(){
    echo "olá, mundo!";
}
helloWorld();
echo '<br>';

function soma($n1, $n2){
    return $n1 + $n2;
}

echo soma(20,30);
echo '<br>';

function verificaNome($nome){
    if($nome == 'irineu'){
        return true;
    }else{
        return false;
    }
}

if(verificaNome('irineu')){
    echo "verdade<br>";
}
?>