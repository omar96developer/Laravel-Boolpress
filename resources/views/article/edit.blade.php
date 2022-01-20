<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{route('articles.update', $article->id)}}" method="POST">
        @csrf
        @method('PUT')

        <label for="titolo">titolo</label>
        <input type="text" name="titolo" id="titolo"  value="{{$article->titolo}}">
    
        <label for="contenuto">contenuto</label>
        <textarea  name="contenuto" rows="10" cols="100" ">
            {{$article->contenuto}}
            
        </textarea>
    
        
        <input type="submit" value="Salva">
    </form>
</body>
</html>