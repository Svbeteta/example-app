@extends('my-layouts.products')

@section('content')
    <h1>Gracias por Contactar</h1>
    
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
@endsection
