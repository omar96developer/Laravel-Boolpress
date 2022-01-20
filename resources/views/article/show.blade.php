<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <a href="{{route('articles.index')}}">ritorna</a>
    <h1>{{$article->titolo}}</h1>
    <p>{{$article->contenuto}}</p>
    <a href="{{route('articles.edit', $article->id)}}">modifica</a>
    <form action="{{route('articles.destroy', $article->id)}}" method="post">
        @csrf
        @method('DELETE')
        <input type="submit" value="Cancella">
    </form>
</body>
</html>