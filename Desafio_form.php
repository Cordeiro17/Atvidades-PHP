<?php


if($_SERVER["REQUEST_METHOD"]==="POST"){
if(isset($_POST["Nome_do_produto"])){
    $Nome_do_produto = $_POST["Nome_do_produto"];
    echo "<br>" . $Nome_do_produto;
}
}

if($_SERVER["REQUEST_METHOD"]==="POST"){
if(isset($_POST["categoria"])){
    $categoria = $_POST["categoria"];
    echo "<br>" . $categoria;
}
}

if($_SERVER["REQUEST_METHOD"]==="POST"){
if(isset($_POST["preco"])){
    $preco = $_POST["preco"];
    echo "<br>" . $preco;
}
}

if($_SERVER["REQUEST_METHOD"]==="POST"){
if(isset($_POST["qtdemest"])){
    $qtdemest = $_POST["qtdemest"];
    echo "<br>" . $qtdemest;
}
}
    

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

     <form method="POST">
    <label for="Nome_do_produto">
    <P>Nome do produto</P>
    </label>
    <input type="text" name="Nome_do_produto" id="Nome_do_produto" placeholder="Nome do produto">
    

    
    <label for="categoria">
    <P>Categoria</P>
    </label>
    <input type="text" name="categoria" id="categoria" placeholder="categoria">
   

     
    <label for="preco">
    <P>Preço</P>
    </label>
    <input type="number" name="preco" id="preco" placeholder="preço">

   

     
    <label for="qtdemest">
    <P>Quantidade de estoque</P>
    </label>
    <input type="number" name="qtdemest" id="qtdemest" placeholder="quantidade de estoque">
    
    

    <button Type="submit">Enviar</button>
    </form>
</body>
</html>