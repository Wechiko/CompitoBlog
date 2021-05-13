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
            <li><a href="{{ route('posts.create') }}">Crea nuovo Post</a></li>

        </ul>
    </nav>
</header>

<!-- CONTENT -->
<div class="content">
    <table>
        <div class="w3-panel w3-blue w3-card-4">nero</div>
        <caption><h2>Lista posts</h2></caption>
        <tr>
            <th scope="col">title</th>
            <th scope="col">text</th>
        </tr>
        @foreach($posts as $post)
            <tr>
                <td>{{$post->id}}</td>
                <td>{{$post->title}}</td>
                <td>{{$post->text}}</td>
                <td>


                    <form method="post" action="{{route('posts.destroy',['post' => $post])}}">
                        @csrf
                        @method('delete')
                    <button>Elimina</button>
                    </form>

                    <button ><a href="{{ route('posts.edit', $post->id) }}">Modifica</a></button>




                </td>
            </tr>
        @endforeach
    </table>
</div>
</body>

</html>

<style>





</style>
