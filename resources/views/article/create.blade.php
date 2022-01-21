<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{route('articles.store')}}" method="POST">
        @csrf
        
        <label for="titolo">titolo</label>
        <input type="text" name="titolo" id="titolo" " >
    
        <label for="contenuto">contenuto</label>
        <textarea name="contenuto" rows="10" cols="100" placeholder="Scrivi qui...">
            
        </textarea>
    
        
        <input type="submit" value="Salva">
    </form>
    
    <script src="//js.nicedit.com/nicEdit-latest.js" type="text/javascript">
    </script>
    <script type="text/javascript">
      bkLib.onDomLoaded(nicEditors.allTextAreas);
    </script>
</body>
</html>