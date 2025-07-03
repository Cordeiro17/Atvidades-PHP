<?php

if ($_SERVER['REQUEST_METHOD'] === "POST") {
    if (isset($_POST["email"])) {
        $email = $_POST["email"];
        echo "E-mail cadastrado com sucesso: $email";
    } else {
        echo "Por favor, preencha o campo de e-mail.";
    }
}

?>







<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 <form action="POST">
<label for="email">
<p>Endereço de E-mail</p>
</label>
<input type="email" name="email" id="email" placeholder="Digite seu email">

 <button type="submit">Cadastrar</button>
 </form>    

</body>
</html>