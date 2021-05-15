<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300&display=swap" rel="stylesheet">
</head>
<body>

<!-- HEADER -->
<header class="header"> <!-- Header per contenuto di navigazione -->
    <nav class="header__nav"> <!-- lista di link -->
            <h1>Alessio Marinaccio's Blog</h1>

    </nav>
</header>

<!-- CONTENT -->
<div class="content">
    <table>
        <div class="creare">
            <button class="new" href="{{ route('posts.create') }}">-->New Post<--</button>
        </div>
        <caption>Posts List</caption>

        <tr>

        </tr>
        @foreach($posts as $post)
            <tr>
                <td>Title: {{$post->title}}<br>
                Text: {{$post->text}}</td>
                <td>


                    <form method="post" action="{{route('posts.destroy',['post' => $post])}}">
                        @csrf
                        @method('delete')
                        <div class="middle">
                    <button class="btn btn1">Elimina</button>
                        </div>
                    </form>
                    <div class="middle">
                    <button class="btn btn1" ><a href="{{ route('posts.edit', $post->id) }}">Modifica</a></button>
                    </div>



                </td>
            </tr>
        @endforeach
    </table>
</div>
</body>

</html>

<style>
    .header{
        display: block;
        font-size: 2.3em;
        margin-top: 5px;
        margin-bottom: 5px;
        text-align: center;
        font-weight:  bold;
        text-shadow: -1px 0 #ffffff, 0 1px #ffffff, 1px 0 #ffffff, 0 -1px #ffffff;
        background-image: url({{asset('images/bello.jpg')}});
    }
.content{
    color: white;
}
body{
    background-image: url({{asset('images/paper.jpg')}});
    font-family: 'Raleway', sans-serif;
}
.creare{
    text-align: center;
    font-size: 1.5em;

}
caption{
    text-align: center;
    font-size: 1.5em;
}
    table {
        margin-left: auto;
        margin-right: auto;
        text-align: center;
    }
    td {
        padding:10px 100px;
        text-align: center;


    }

    tr{
        display: -moz-inline-block;
        border: 1px solid white;
        background-color: #572080;


    }
    .btn{
        position: center;
        display: block;
        color: white;
        font-size: 10px;
        font-family: "montserrat";
        text-decoration: none;
        border: 2px solid #ae53d6;
        padding: 1px 3px;
        text-transform: uppercase;
        overflow: hidden;
        transition: 1s all ease;
        margin-top: 10px;

    }
    .btn::before{
        background: #e138ff;
        content: "";
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%,-50%);
        z-index: -1;
        transition: all 0.6s ease;
    }
    .btn1::before{
        width: 0%;
        height: 100%;
    }

    .btn1:hover::before{
        width: 100%;
    }

    .middle {
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
    }
    .create {
        height: 10%;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .new {

        font-family: Helvetica;
        letter-spacing: 0.4em;
        font-weight: 60;
        font-size: 10px;
        text-align: center;
        color: #ffffff;
        cursor: pointer;
        max-width: 130px;
        width: 100%;
        outline: 3px solid;
        outline-color: rgb(255, 255, 255);
        outline-offset: 1px;
        transition: all 600ms cubic-bezier(0.2, 0, 0, 0.8);
    }

    .new:hover {
        color: rgba(255, 255, 255, 0.7);
        outline-color: rgba(71, 126, 232, 0);
        outline-offset: 300px;
    }


</style>
