<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar um produto</title>
</head>
<body>
    <form action="{{ $urlapi }}" method="POST">
        @csrf
        <label for="">Nome</label> <br />
        <input type="text" name="name" value="{{ $produto->name }}"> <br />
        <label for="">Slug</label> <br />
        <input type="text" name="slug" value="{{ $produto->slug }}"> <br />
        <label for="">Preco</label> <br />
        <input type="text" name="price" value="{{ $produto->price }}"> <br />
        <label for="">Descrição</label> <br />
        <input type="text" name="description" value="{{ $produto->description }}"> <br />
        <button>Editar</button>
    </form>
</body>
</html>
