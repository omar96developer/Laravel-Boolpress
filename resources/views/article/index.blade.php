@extends('layouts.admin')
@section('content')
<div class="col-6 p-5">
    <h2 class="mb-4">Lista Degli Articoli</h2>
    <ul>
        @foreach ($article as $art)
        <li>
            <h3>{{$art->titolo}}</h3>
           
            <button class="btn btn-success" type="submit"> <a href="{{route('articles.show', $art->id)}} " class="text-white">Vai all' articolo</a></button>
        </li>
        @endforeach
    </ul> 
</div>    

@endsection
