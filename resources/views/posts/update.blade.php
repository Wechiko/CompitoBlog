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
        <h1>Posts update</h1>
    </nav>
</header>

<!-- CONTENT -->
<div class="content">
    <form action="{{ route('posts.update', $post->id)}}" method="POST">
        @csrf
        @method('PATCH')
        Lista posts
        <div class="form-group">
            <label for="title">Title:</label>
            <input  type="text" class="form-control" value="{{$post->title}}" id="title" name="title">
        </div>

        <div class="form-group">
            <label for="text">Text:</label>
            <input type="text" class="form-control" value="{{$post->text}}" id="text" name="text">
        </div>
        <div class="form-group">
            <button style="cursor:pointer" type="submit" class="btn btn-primary"  >Submit</button>
        </div>

    </form>
    <img  src="{{asset('images/')}}"/>



</div>
</body>

</html>

<style>


</style>
