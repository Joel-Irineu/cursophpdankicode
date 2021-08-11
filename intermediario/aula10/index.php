<?php
// sessões e cookies
session_start();
$_SESSION['nome'] = 'irineu';

setcookie('nome', 'Irineu', time() + (606*60*24), '/');

echo $_COOKIE['nome'];

?>

smchat e szchat da fortx