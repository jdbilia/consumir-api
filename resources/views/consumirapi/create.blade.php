<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastrar um novo produto</title>
</head>
<body>
    <form action="{{ 'http://localhost:9000/api/products' }}" method="POST">
        @csrf
        <div class="nome"><label for="">Nome</label> <br />
        <input type="text" name="name" placeholder="Digite o nome"> <br />
        <label for="">Slug</label> <br />
        <input type="text" name="slug" placeholder="Digite o slug"> <br />
        <label for="">Preco</label> <br />
        <input type="text" name="price" placeholder="xx.xx"> <br />
        <label for="">Descrição</label> <br />
        <input type="text" name="description" placeholder="Digite a descrição"> <br />
        <button>Salvar</button>
    </form>
</body>
</html>
