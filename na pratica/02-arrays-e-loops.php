<?php

$nome = array('Joel', 'Irineu', 'João');

echo $nome[1].'<br>';

// foreach($nome as $key => $value){
//     echo $value;
//     echo '<br>';
// }

for($i = 0; $i < 10; $i++){
    echo $i;
    echo '<br>';
}

for($i = 0; $i < sizeof($nome); $i++){
    echo $nome[$i];
    echo '<br>';
}

$i = 0;
while($i < 10){
    echo $i.'<br>';
    $i++;
}