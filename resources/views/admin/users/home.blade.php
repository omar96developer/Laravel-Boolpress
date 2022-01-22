@extends('layouts.admin')

@section('content')
<div class="col-9 pt-5">
    <ul>
        @foreach ($users as $user)
            <li class="mb-5">
                <p>
                    Nome: {{$user->name}}
                </p>
                <p>Ruolo: {{$user->role}} </p>
                <p>Email: {{$user->email}}</p>
                <button type="button" class="btn btn-warning btn-small"><a href="{{route('admin.users.edit', $user->id)}}" class="text-dark">Modifica</a></button>
            </li>
        @endforeach
    
    </ul>
    
</div>

@endsection
