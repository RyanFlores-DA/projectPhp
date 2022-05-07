<?php
session_start();
include("../model/Conexao.php");

$login = mysqli_real_escape_string($strcon, trim($_POST['login']));
$pass = mysqli_real_escape_string($strcon, trim($_POST['pass']));

$sql = "SELECT COUNT(*) AS total FROM users WHERE login = '$login'";
$result = mysqli_query($strcon,$sql);
$row = mysqli_fetch_assoc($result);

if($row['total'] == 1){
    $_SESSION['usuario_exist'] = true;
    header('Location: index.php');
    exit;
}

$sql = "INSERT INTO users (id, login, pass) VALUES (0,'$login','$pass')";
if($strcon->query($sql) === TRUE){
    $_SESSION['status_cadastro'] = true;
    header('Location: Home.php');
}

$strcon-> close();
exit;
