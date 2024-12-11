@extends('admin.layouts.app')
@section('title', 'Editar Usuario')

@section('content')

    <h1>Editar Usuario</h1>

    @if ($errors -> any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif
    
    <form action="{{ route('users.update', $user->id) }}" method="POST">
        @csrf
        @method('put')
        <input type="text" name="name" placeholder="Nome" value="{{ $user->name }}">
        <input type="email" name="email" placeholder="E-mail" value="{{ $user->email }}">
        <input type="password" name="password" placeholder="Senha">
        <button type="submit">Edit</button>
    </form>

@endsection