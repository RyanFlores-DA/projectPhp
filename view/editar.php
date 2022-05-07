<?php
session_start();
$id = $_SESSION['id']; 

        include '../model/Conexao.php'; 
        $sql = "SELECT * FROM agenda where id = '{$_GET['id']}'";
        $search = mysqli_query($strcon, $sql);
        
        while($dados = mysqli_fetch_array($search)){
            $id = $dados['id'];
            $title = $dados['title'];
            $description = $dados['description'];
            $start = $dados['start'];
            $end = $dados['end'];
            $status = $dados['status'];
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/libs/css/style.css">
    <link rel="stylesheet" href="/libs/js/calender/main.min.css">
    <title>Editar</title>
</head>
<body>
<div class="formulario">
<form name="add" id ="formAdd" method="post" action="/controller/ControllerEdit.php"> 
    Nome: <h2><?php echo $title;?></h2>
    Descrição: <h2><?php echo $description;?></h2>
    <br>
    Início: <h2><?php echo $start;?></h2>
    Fim: <h2><?php echo $end;?></h2>
    <input type ="hidden" name="status" id="status" value="Concluida">
    <input type ="hidden" name="id" id="id" value="<?php echo $id;?>">
    <input type="submit" class="status" value="Concluida">
    <a id="delete" href="<?php echo '/controller/ControllerDelete.php?id='.$_GET['id'];?>" target="_self" style="text-decoration:none">Cancelar</a>
</form>
</div>
<?php } ?>
</body>
</html>