@extends('my-layouts.products')

@section('content')
<h2 class="centered-title">Nuestros Productos</h2>

<table>
    <thead>
        <tr>
            <th></th>
            <th style="text-align: center;">Título</th>
            <th>Precio</th>
            <th>Plataforma</th>
        </tr>
    </thead>
    <tbody>
        <tr class="product">
            <td><img src="/images/RDR2.jpg" alt="Red Dead Redemption 2" width="100"></td>
            <td>Red Dead Redemption 2</td>
            <td>$30</td>
            <td>PS5</td>
        </tr>
        <tr class="product">
            <td><img src="/images/AC_Valhalla.jpg" alt="Assassins Creed Valhalla" width="100"></td>
            <td>Assassins Creed Valhalla</td>
            <td>$60</td>
            <td>PS5</td>
        </tr>
        <tr class="product">
            <td><img src="/images/Elden_Ring.jpg" alt="Elden Ring" width="100"></td>
            <td>Elden Ring</td>
            <td>$60</td>
            <td>PS5</td>
        </tr>
    </tbody>
</table>
@endsection
