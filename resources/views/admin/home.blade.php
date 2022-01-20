@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
                
                @if (Auth::user()->role === 'admin')
                <a href="{{route('admin.users.index')}}">utenti</a>
               
                @endif
                <a href="{{route('articles.create')}}">crea</a> 

                
            </div>
        </div>
    </div>
</div>
@endsection
