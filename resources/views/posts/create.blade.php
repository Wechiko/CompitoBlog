<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>

<!-- HEADER -->
<header class="header"> <!-- Header per contenuto di navigazione -->
    <nav class="header__nav"> <!-- lista di link -->
        <h1>Posts create</h1>
    </nav>
</header>

<!-- CONTENT -->
<div class="content">
    <form method="post" action="{{route('posts.store')}}">
        @csrf
        <div class="form-group">
            <label for="title">Title:</label>
            <input type="text" class="form-control"  id="title" name="title">
        </div>

        <div class="form-group">
            <label for="text">Text:</label>
            <input type="text" class="form-control" id="text" name="text">
        </div>
        <div class="form-group">
            <button style="cursor:pointer" type="submit" class="btn btn-primary" >Submit</button>
        </div>

    </form>
</div>
</body>

</html>

<style>

</style>
