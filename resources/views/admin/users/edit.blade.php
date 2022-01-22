@extends('layouts.admin')

@section('content')
<div class="col-6 py-5">
  <h2>Modifica Utente</h2>
  <form action="{{route('admin.users.update', $user->id)}}" method="POST">
    @csrf
    @method('put')
    <div class="form-group">
      <label class="form-label" for="name">Nome</label>
      <input class="form-control" type="text" name="name" id="name" value="{{$user->name}}" >
    </div>
    

    <div class="form-group">
      <label class="form-label" for="email">Email</label>
      <input class="form-control" type="email" name="email" id="email" value="{{$user->email}}" >
    </div>
    
    <div class="form-group">
      <label class="form-label" for="email">Permessi</label>
      <select class="form-control"  @error('role') is-invalid @enderror" id="role"
      name="role" required>
      <option value="user" {{ $user->role === 'user' ? 'selected' : '' }}>
        Utente standard</option>
      <option value="admin" {{ $user->role === 'admin' ? 'selected' : '' }}>
        Amministratore</option>
    </select>
    </div>
   

    
    <button class="btn btn-success" type="submit">Salva</button>
    <button class="btn btn-danger" type="submit"><a href="{{route('admin.users.index')}}" class="text-dark fw-bold">Annulla</a></button>
    

</form>
</div>

@endsection
