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
            <li><a href="{{ route('posts.create') }}">Aggiungi</a></li>
            <li>Impostazioni</li>
        </ul>
    </nav>
</header>

<!-- CONTENT -->
<div class="content">
    <table>
        <caption>Lista posts</caption>
        <tr>
            <th scope="col">title</th>
            <th scope="col">text</th>
        </tr>
        @foreach($posts as $post)
            <tr>
                <td>{{$post->title}}</td>
                <td>{{$post->text}}</td>
                <td>
                    <form method="post" action="{{route('posts.destroy',['post' => $post])}}">
                        @csrf
                        @method('delete')
                    <button>Elimina</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
</div>
</body>

</html>

<style>

</style>
