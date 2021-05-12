<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>

<!-- HEADER -->
<header class="header"> <!-- Header per contenuto di navigazione -->
    <nav class="header__nav"> <!-- lista di link -->
        <ul>
            <li>Dashboard</li>
            <li><a href="{{ route('users.create') }}">Aggiungi</a></li>
            <li>Impostazioni</li>
        </ul>
    </nav>
</header>

<!-- CONTENT -->
<div class="content">
    <table>
        <caption>Lista utenti</caption>
        <tr>
            <th scope="col">Nome</th>
            <th scope="col">Cognome</th>
            <th scope="col">Email</th>
            <th scope="col">Azioni</th>
        </tr>
        @foreach($users as $user)
            <tr>
                <td>{{$user->name}}</td>
                <td>{{$user->surname}}</td>
                <td>{{$user->email}}</td>
                <td>
                    <a href="{{ route('users.edit',['user' => $user]) }}">Modifica</a>
                    <button>Elimina</button>
                </td>
            </tr>
        @endforeach
    </table>
</div>
</body>

</html>

<style>

</style>
