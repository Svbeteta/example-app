<!-- resources/views/contact.blade.php -->
@extends('my-layouts.products')

@section('content')
<h1>Formulario de Contacto VIP</h1>

@if ($errors->any())
    <div class="alert">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form method="POST">
    @csrf

    <div>
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" value="{{ old('nombre') }}">
    </div>

    <div>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="{{ old('email') }}">
    </div>

    <div>
        <input type="checkbox" id="publicidad" name="publicidad" value="some" @checked(old('publicidad'))>
        <label for="publicidad">Recibir Publicidad</label>
    </div>

    <div>
        <label for="mensaje">Mensaje Largo:</label>
        <textarea id="mensaje" name="mensaje">{{ old('mensaje') }}</textarea>
    </div>

    <div>
        <input type="submit" value="Enviar">
    </div>
</form>
@endsection
