<?php
// sessões e cookies
session_start();
// if(isset($_SESSION['nome'])){
//     echo $_SESSION['nome'];
// }
unset($_SESSION['nome']); // enserra um item da sessão
session_destroy(); // encerra todos os itens da sessão
?>