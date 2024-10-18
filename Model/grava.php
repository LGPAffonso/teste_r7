<?php

include "../Database/abrir_banco.php";


$nome = $_POST["nome"];
$email = $_POST["email"];
$senha = $_POST["senha"];
$codigo = $_POST["codigo"];

try {
    $ch = curl_init();

    curl_setopt_array($ch, [

        CURLOPT_URL => 'https://jsonplaceholder.typicode.com/posts/1',

        CURLOPT_POST => false,

        CURLOPT_HTTPHEADER => [
            'Content-Type: application/json',
            'format: json'
        ],

        CURLOPT_RETURNTRANSFER => true,
    ]);

    $resultado = json_decode(curl_exec($ch));
    curl_close($ch);
} catch (\Throwable $th) {
    
}
$titulo = $resultado->title;

$executa = "INSERT INTO users (name_user, email_user,  password_user, title_user, code_user) VALUES ('$nome', '$email', '$senha', '$titulo', '$codigo')";


$query = $mysqli->query($executa);

echo $query;

echo "<fieldset>";
echo "<center>";
echo "<br><br><br>";
echo "<font color='red'>";
if ($query){
    echo "<h1> Inclusão realizada com sucesso<br>";

}else{
    echo "<h1> erro ao realizar Inclusão<br>";
}
echo "<br><br>";
echo "<a href ='../login.php'>Login</a></h1>";
echo "</font></center>";
echo "</fieldset>";
