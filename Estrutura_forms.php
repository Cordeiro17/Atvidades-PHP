<?php
if($_SERVER["REQUEST_METHOD"]==="POST"){
if(isset($_POST["userEmail"])){
    $email = $_POST["userEmail"];
    echo $email;
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
    <label for="userEmail">
    <P>endereço de email</P>
    </label>
    <input type="text" name="userEmail" id="userEmail" placeholder="email@email">
    <button Type="submit">Entrar</button>
    </form>
</body>
</html>