<?php
    session_start();
    include('../model/Conexao.php');

    if(empty($_POST['login']) || empty($_POST['pass'])){   
        header("Location: /view/login.php");
	    exit();
    }
    $login = mysqli_real_escape_string($strcon, $_POST['login']);
    $pass = mysqli_real_escape_string($strcon, $_POST['pass']);

    $sql = "SELECT * FROM users WHERE login = '{$login}' AND pass = '{$pass}'";

    $result = mysqli_query($strcon, $sql);

    $row = mysqli_num_rows($result);

    if($row == 1){
        $dados = mysqli_fetch_array($result);
        $usuario_bd = mysqli_fetch_assoc($result);
        $id = $dados['id'];
        $_SESSION['id'] = $id;
        header('Location: /view/agenda.php');
        exit();
    }else{
        $_SESSION['not_authenticated'] = true;
        echo 'Não autenticado';
        header("Location: /view/login.php");
        exit();
    }
?>