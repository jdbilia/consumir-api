<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mostrar um produto</title>
</head>
<body>
    <form action="{{ 'http://localhost:9000/api/login' }}" method="POST">
        @csrf
        <label for="">E-mail</label> <br />
        <input type="text" name="email" value=""> <br />
        <label for="">Senha</label> <br />
        <input type="text" name="password" value=""> <br />
        <button>Login</button>
    </form>
</body>
</html>
