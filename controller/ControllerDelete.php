<?php
session_start();
$id = $_SESSION['id']; 
include("../model/Conexao.php");
//$status = mysqli_real_escape_string($strcon, trim($_POST['status']));
#Insercao na tabela
$sql = "DELETE from agenda where id = '{$_GET['id']}'";
if($strcon->query($sql) === TRUE){
    $_SESSION['status_delete'] = true;
    header('Location: /view/agenda.php');
}

$strcon-> close();
exit;
?>