<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
        }
        .container {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-top: 50px;
        }
        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin: 8px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        input[type="submit"] {
            width: 100%;
            background-color: #007bff;
            color: #fff;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #0056b3;
        }
        .error {
            color: red;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Perfil - NBA</h2>
        <span>{{ session('message') }}</span>
        @if($user != null)
            <form method="post" action="{{ route ('updateUser', [$user->id]) }}">
                @csrf
                @method('put')
                <label for="username">Usuário:</label>
                <input type="text" value="{{ $user->name }}"  name="username" required>
                @error('name') <span>{{$message}}</span> @enderror

                <label for="username">Email:</label>
                <input type="text" value="{{ $user->email }}" name="email" placeholder="E-mail" required>
                @error('email') <span>{{$message}}</span> @enderror


                <label for="password">Senha:</label>
                <input type="password" id="password" name="password" placeholder="Senha" >
                @error('password') <span>{{$message}}</span> @enderror

                <label for="password">Confirmar Senha:</label>
                <input type="password" id="password_confirmation" name="password" placeholder="Confirme a Senha" >


                <input type="submit" value="Atualizar">
            </form>               

            <form method="post" action="{{ route ('deleteUser', [$user->id]) }}">
                @csrf
                @method('delete')

                <input type="submit" value="Excluir">
            </form>

        @endif
    </div>
</body>
</html>
<?php
if(isset($_GET['error']) && $_GET['error'] == '1') {
    echo '<p class="error">Usuário ou senha incorretos.</p>';
}
?>

