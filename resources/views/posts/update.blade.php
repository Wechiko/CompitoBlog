<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300&display=swap" rel="stylesheet">
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
        <div class="text1">
            <label class="title" for="title">Title:</label>
            <input  type="text" class="black" value="{{$post->title}}" id="title" name="title">
        </div>

        <div class="text1">
            <label for="text">Text:</label>
            <input type="text" class="black" value="{{$post->text}}" id="text" name="text">
        </div>
        <div class="wrap">
            <button style="cursor:pointer" type="submit" class="button"  >Submit</button>
        </div>

    </form>




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
        margin-left: auto;
        margin-right: auto;
        text-align: center;
        color: white;
    }
    body {
        background-image: url({{asset('images/paper.jpg')}});
        font-family: 'Raleway', sans-serif;
    }
    .text1{
        margin-top: 10px;
        margin-bottom: 10px;
        font-size: 20px;
        font-weight: bold;
        text-shadow: -1px 0 #ffffff, 0 1px #ffffff, 1px 0 #ffffff, 0 -1px #ffffff;
        color: black;
    }
    .black{
        border: 1px solid #ffffff;
        background: #5b2764;
        color: white;
        font-weight: 700;
        font-size: 20px;

    }




    .wrap {
        height: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .button {
        min-width: 100px;
        min-height: 6px;
        font-family: 'Nunito', sans-serif;
        font-size: 15px;
        text-transform: uppercase;
        letter-spacing: 1.3px;
        font-weight: 700;
        color: #313133;
        background: #b660d9;
        background: linear-gradient(90deg, rgb(211, 233, 230) 0%, rgb(255, 255, 255) 100%);
        border: none;
        border-radius: 1000px;
        box-shadow: 1px 1px 2px rgb(202, 113, 222);
        transition: all 0.3s ease-in-out 0s;
        cursor: pointer;
        outline: none;
        position: relative;
        padding: 10px;
    }

    button::before {
        content: '';
        border-radius: 1000px;
        min-width: calc(300px + 12px);
        min-height: calc(60px + 12px);
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        opacity: 0;
        transition: all .3s ease-in-out 0s;
    }

    .button:hover, .button:focus {
        color: #313133;
        transform: translateY(-6px);
    }

    button:hover::before, button:focus::before {
        opacity: 1;
    }

    button::after {
        content: '';
        width: 30px; height: 30px;
        border-radius: 100%;
        border: 1px solid #c56fdd;
        position: absolute;
        z-index: -1;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        animation: ring 1.5s infinite;
    }

    button:hover::after, button:focus::after {
        animation: none;
        display: none;
    }

    @keyframes ring {
        0% {
            width: 30px;
            height: 30px;
            opacity: 1;
        }
        100% {
            width: 300px;
            height: 300px;
            opacity: 0;
        }
    }

</style>
