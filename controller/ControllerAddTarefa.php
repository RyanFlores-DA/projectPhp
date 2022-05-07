<?php
session_start();
include("../model/Conexao.php");

$title = mysqli_real_escape_string($strcon, trim($_POST['title']));
$description = mysqli_real_escape_string($strcon, trim($_POST['description']));
$start = mysqli_real_escape_string($strcon, trim($_POST['start']));
$end = mysqli_real_escape_string($strcon, trim($_POST['end']));
$timeStart =  mysqli_real_escape_string($strcon, trim($_POST['timeStart']));
$timeEnd =  mysqli_real_escape_string($strcon, trim($_POST['timeEnd']));
$user_id = mysqli_real_escape_string($strcon, trim($_POST['user_id']));
$formStart= new \DateTime($start.' '.$timeStart);
$formEnd= new \DateTime($start.' '.$timeEnd);
$dateStart = $formStart->format("Y-m-d H:i:s");
$dateEnd = $formEnd->format("Y-m-d H:i:s");
#Insercao na tabela
$sql = "INSERT INTO agenda (id, title, description, start, end, status, user_id) VALUES (0,'$title','$description','$dateStart','$dateEnd','pendente',$user_id)";
if($strcon->query($sql) === TRUE){
    $_SESSION['status_cadastro'] = true;
    header('Location: /view/agenda.php');
}

$strcon-> close();
exit;
?>