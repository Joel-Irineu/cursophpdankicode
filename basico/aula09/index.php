<?php
// condicionais
$var1 = 10 + 5;
$var2 = '10 + 5';

if($var1 == $var2){
    echo '<div style="width: 300px;height: 300px;background:red;"></div>';
}else{
    echo 'não bateu <br>';
}

if($var1 == $var2){
    echo 'passou no if';
}else if($var1 == 15){
    echo 'passou no else if';
}else{
    echo 'não passou em nenhum dos dois';
}

?>