<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/libs/css/style.css">
    </link>
    <link rel="stylesheet" href="/libs/js/FullCalender/main.min.css">
    </link>
    <title>Login</title>
</head>

<body>
    <h3>Faça seu Login</h3>
    <div class="formulario">
        <form name="formAdd" id="formAdd" method="post" action="/controller/ControllerLogin.php">
            <label for="fname">Login</label>
            <input type="text" id="login" name="login" placeholder="Digite seu Login">

            <label for="pas">Senha</label>
            <input type="password" id="pass" name="pass" placeholder="Digite sua senha">
            <input type="submit" class="entrar" value="Entrar">
        </form>
    </div>
    <script src="/libs/js/javascript.js"></script>
    <script src="/libs/js/FullCalender/main.min.js"></script>
</body>

</html>