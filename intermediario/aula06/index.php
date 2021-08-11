<?php
// Funções para string
$conteudo = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur consectetur doloremque ad ut veniam quisquam error? Aspernatur fuga aperiam explicabo, incidunt, distinctio tempore dicta totam reprehenderit magnam a voluptates harum?';
// recorda uma string
echo substr($conteudo, 0, 20);

echo '<hr>';

$nomecompleto = 'joel irineu souza de oliveira';
// separa um texto de acordo com o separador em um array com os conteudos
$nomes = explode(' ', $nomecompleto);
print_r($nomes);

echo '<hr>';

// Junta arrays adicionando um separador
$nome = implode(' ', $nomes);

echo $nome;
?>
