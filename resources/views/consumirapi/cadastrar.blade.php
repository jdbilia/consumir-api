<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mostrar um produto</title>
</head>
<body>
    <form action="{{ 'http://localhost:9000/api/register' }}" method="POST">
        @csrf
        <label for="">Nome</label> <br />
        <input type="text" name="name" placeholder="Digite o nome"> <br />
        <label for="">E-mail</label> <br />
        <input type="text" name="email" placeholder="xx@xx.xx"> <br />
        <label for="">Senha</label> <br />
        <input type="text" name="password" placeholder="****"> <br />
        <label for="">Confirmar Senha</label> <br />
        <input type="text" name="password_confirmation" placeholder="****"> <br />
        <button>Cadastrar</button>
    </form>
</body>
</html>
