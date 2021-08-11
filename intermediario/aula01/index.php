<?php
// Foreach e for para arrays
$arr = ['joel', 'irineu', 'joão', 'mario'];

foreach($arr as $key => $value){
    echo $key.' => '.$value.'<hr>';
}

echo '<br>';

$total = count($arr);

for($i = 0; $i < $total; $i++){
    echo $arr[$i].'<hr>';
}
?>