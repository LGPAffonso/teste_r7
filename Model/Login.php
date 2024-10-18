<?php
include "../Database/abrir_banco.php";


$email = $_POST["email"];
$senha = $_POST["senha"];

$executa = "Select email_user,  password_user from users where email_user = '".addslashes($email)."' and password_user = '".addslashes($senha)."'";

$query = $mysqli->query($executa);

if($mysqli->affected_rows){
    $_SESSION['autenticado']= true;
    // $teste= setcookie("autenticado", true, time()+3600);
}
// echo $teste;die;
header('Location: ../home.php');