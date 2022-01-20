@extends('layouts.admin')
<h1>Utenti</h1>
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Utenti registrati') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
            <ul>
                @foreach ($users as $user)
                    <li>
                        <a href="">
                            name: {{$user->name}} / {{$user->role}} <br> email: {{$user->email}}
                        </a>
                        <a href="{{route('admin.users.edit', $user->id)}}">modifica</a>
                    </li>
                @endforeach

            </ul>
        </div>
    </div>
</div>
@endsection