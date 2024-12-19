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
        @method('put')
        @include('admin.users.partials.form')
    </form>

@endsection