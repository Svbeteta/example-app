@extends('my-layouts.my-app-layout')

@section('content')
    <h1>Gracias por Contactar</h1>
    
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
@endsection
