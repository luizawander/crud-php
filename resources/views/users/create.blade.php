<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>teste</title>
</head>
<body>
    <a href="{{ route('users.index') }}">Listar</a> <br>

    <h2>Cadastrar Usuário</h2>

    @if ($errors->any()){
        <p style="color: red;">
            @foreach ($errors->all() as $error)
                {{ $error }} <br>
            @endforeach
        </p>
        }
    @endif

    <form action="{{ route('users.store') }}" method="POST">
        @csrf
        @method('POST')

        <label for="name">Nome:</label>
        <input type="text" name="name" placeholder="Nome Completo" value="{{ old('name') }}"> <br>

        <label for="email">E-mail:</label>
        <input type="email" name="email" placeholder="E-mail" value="{{ old('email') }}"> <br>

        <label for="password">Senha:</label>
        <input type="password" name="password" placeholder="Senha"> <br>

        <button type="submit">Cadastrar</button>
    </form>

</body>
</html>
