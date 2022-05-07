<?php
session_start();
$id = $_SESSION['id']; 

        include '../model/Conexao.php'; 
        $sql = "SELECT * FROM users where id = '{$id}'";
        $search = mysqli_query($strcon, $sql);
        
        while($dados = mysqli_fetch_array($search)){
            $id = $dados['id'];
            $login = $dados['login'];
?>
<!DOCTYPE html>
<html lang="pt=br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/libs/css/style.css">
    <link rel="stylesheet" href="/libs/js/calender/main.min.css">
    <title>Adicionar Tarefa</title>
</head>

<body>
    <div class="formulario">
        <form name="add" id="formAdd" method="post" action="/controller/ControllerAddTarefa.php">
            Nome: <input type="text" name="title" id="title" value="">
            Descrição: <input type="text" name="description" id="description" value="">
            <input type="hidden" name="user_id" id="user_id" value="<?php echo $id?>">
            <br>
            Inicio: <input type="date" name="start" id="start" value="">
            Fim: <input type="date" name="end" id="end" value="">
            Hora Início: <input type="time" id="timeStart" name="timeStart" min="00:00" max="23:00" required>
            Hora Fim: <input type="time" id="timeEnd" name="timeEnd" min="00:00" max="23:00" required>
            <input type="submit" class = "entrar" value="Salvar">
        </form>
    </div>
    <script src="/libs/js/calender/main.min.js"></script>
    <script src="/libs/js/javascript.js"></script>
</body>
</html>
<?php }?>