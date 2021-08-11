<?php
// Loopings
    //logica: variavel, condição, operação
    echo '<h3>for</h3>';
    for($i = 0; $i < 10; $i++){
        echo $i.'<hr>';
    }
    echo '<h3>while</h3>';
    // logica: enquanto a condição for verdadeixa execute
    $cont = 0;
    while($cont < 10){
        echo $cont.'<hr>';
        $cont++;
    }
    echo '<h3>do while</h3>';
    // logica: igual ao while, porem só confere se retorna verdadeiro, após a primeira execução!
    do{
        echo $cont.'<hr>';
        $cont++;
    }while($cont < 10)
?>