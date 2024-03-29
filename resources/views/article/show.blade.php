    @extends('layouts.admin')
    @section('content')
    <div class="col-10 p-5">

            <h1>{{$article->titolo}}</h1>
           <img src="{{asset("storage/" . $article->coverImg)}}" alt="#" style="max-height: 500px;width: 500px;object-fit:cover;" class="mb-4">
            <p>{{$article->contenuto}}</p>
            <h6>Genere: <small class="badge bg-success text-white">{{$article->category->name}}</small> </h6>
            <h6>Attore/i: 
            @foreach ($article->tags as $tag)
               <small class="badge bg-success text-white">{{$tag->name}}</small>
            @endforeach
            </h6>
        <div class="d-flex mt-3">
            
            <button class="btn btn-warning mr-3" type="submit"><a href="{{route('articles.edit', $article->id)}} " class="text-dark">Modifica</a></button>

            <form action="{{route('articles.destroy', $article->id)}}" method="post">
                @csrf
                @method('DELETE')
                
                <button class="btn btn-danger" type="submit">Elimina</button>

            </form>
        </div>
       
  
    </div>
   
    @endsection