<?php
session_start();
$id = $_SESSION['id']; 
include("../model/Conexao.php");
$ident = mysqli_real_escape_string($strcon, trim($_POST['id']));
$status = mysqli_real_escape_string($strcon, trim($_POST['status']));

#Insercao na tabela
$sql = "UPDATE agenda set status = '{$status}' where id = '{$ident}'";
if($strcon->query($sql) === TRUE){
    $_SESSION['status_edit'] = true;
    header('Location: /view/agenda.php');
}

$strcon-> close();
exit;
?>