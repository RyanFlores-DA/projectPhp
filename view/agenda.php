<?php
session_start();
$id = $_SESSION['id'];

include '../model/Conexao.php';
$sql = "SELECT * FROM users where id = '{$id}'";
$search = mysqli_query($strcon, $sql);

while ($dados = mysqli_fetch_array($search)) {
    $id = $dados['id'];
    $login = $dados['login'];

}

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/libs/css/style.css">
    <link rel="stylesheet" href="/libs/js/calender/main.min.css">
    <title>Agenda</title>
</head>

<body>
    <div class="calenderUser"></div>
    <a href="/view/add.php">Adicionar Tarefa</a>
    <script src="/libs/js/calender/main.min.js"></script>
    <script src="/libs/js/javascript.js"></script>
</body>

</html>