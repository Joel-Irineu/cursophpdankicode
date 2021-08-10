<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        if(isset($_POST['action'])){
            echo $_POST['nome'].'<br>';
            echo $_POST['chave'].'<br>';
            echo $_POST['conteudo'].'<br>';
        }

        if(isset($_POST['action2'])){
            echo $_FILES['arquivo']['name'].'<br>';
        }
    ?>
    <form action="" method="POST">
        <input type="text" name="nome">
        <input type="hidden" name="chave" value="123">
        <br>
        <textarea name="conteudo"></textarea>
        <input type="submit" name="action" value="enviar">
    </form>

    <form action="" enctype="multipart/form-data" method="POST">
        <input type="file" name="arquivo">
        <input type="submit" name="action2" value="enviar">
    </form>
</body>
</html>