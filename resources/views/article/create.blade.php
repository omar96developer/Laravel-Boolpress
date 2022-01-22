@extends('layouts.admin')

@section('content')
<div class="col-6 p-5">
    <h2 class="mb-4">Crea Un Articolo</h2>
    <form action="{{route('articles.store')}}" method="POST" class="mb-5">
        @csrf
        <div class="form-group">
            <label class="form-label" for="titolo">Titolo</label>
            <input type="text" name="titolo" id="titolo" class="form-control">
        </div>
        
    
        <div class="form-group">
            <label for="categoria" class="form-label">Categoria</label>
            <select name="category_id" class="form-control">
            @foreach($categories as $category)
            <option value="{{$category->id}}">
                {{$category->name}}
            </option>
            @endforeach
            </select>
        </div>
        
        <div class="form-group">
            <label for="tags" class="form-label">Tags Attore</label>
            <select name="tags[]" class="form-control" multiple>
            @foreach($tags as $tag)
            <option value="{{$tag->id}}">
                {{$tag->name}}
            </option>
            @endforeach
            </select>
        </div>
    
        <div class="form-group">
            <label for="contenuto" class="form-label">Contenuto</label>
            <textarea class="form-control" name="contenuto" rows="10" cols="100" placeholder="Scrivi qui..."></textarea>
        
        </div>
     
        <button class="btn btn-success" type="submit">Salva</button>
      

    </form>
</div>


@endsection
