@extends('my-layouts.my-app-layout')

@section('content')
<h2>Lista de Contactos</h2>

<table>
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Email</th>
            <th>Recibir Publicidad</th>
            <th>Mensaje</th>
            <th>Fecha de Creación</th>
        </tr>
    </thead>
    <tbody>
        @foreach($contactos as $contacto)
        <tr>
            <td>{{ $contacto->nombre }}</td>
            <td>{{ $contacto->email }}</td>
            <td>{{ $contacto->publicidad ? 'Sí' : 'No' }}</td>
            <td>{{ $contacto->mensaje }}</td>
            <td>{{ $contacto->created_at->format('d/m/Y H:i') }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
