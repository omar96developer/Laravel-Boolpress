@extends('layouts.admin')
<h1>Utenti</h1>
@section('content')
<form action="{{route('admin.users.update', $user->id)}}" method="POST">
    @csrf
    @method('put')
    <label for="name">Nome</label>
    <input type="text" name="name" id="name" value="{{$user->name}}" >

    <label for="email">Email</label>
    <input type="email" name="email" id="email" value="{{$user->email}}" >

    <select @error('role') is-invalid @enderror" id="role"
      name="role" required>
      <option value="user" {{ $user->role === 'user' ? 'selected' : '' }}>
        Utente standard</option>
      <option value="admin" {{ $user->role === 'admin' ? 'selected' : '' }}>
        Amministratore</option>
    </select>

    <input type="submit" value="Salva">
    <a href="{{route('admin.users.index')}}">Annulla</a>
</form>
@endsection
