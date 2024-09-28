<?php

use Illuminate\Support\Facades\Route;
use App\Models\Marca;
use App\Http\Controllers\ContactoController;
use App\Models\Carrito;

Route::get('/contacto', [ContactoController::class, 'index']);
Route::post('/contacto', [ContactoController::class, 'send']);
Route::get('/contactado', [ContactoController::class, 'contacted'])->name('contactado');

Route::get('/productos', function () {
    return view('mis-views.products');
});

Route::get('/contactos', [ContactoController::class, 'contacts'])->name('contactos.index');

Route::get('/', function () {
    return view('mis-views.inicio');
});

Route::get('/inicio', function () {
    return view('mis-views.inicio');
}); 

Route::get('/ejemplo-relaciones', function(){
    echo '<pre>';
    
    echo '############# Marca ########################################'.PHP_EOL;
    $marca = Marca::find(1);
    print_r($marca->toArray());


    echo '############# Modelos a partir de una Marca ################'.PHP_EOL;
    $modelos = $marca->modelos;
    print_r($modelos->toArray());


    echo '############# Un Modelo especifico a partir de una marca ################'.PHP_EOL;
    $corola = $marca->modelos()->where('nombre','Corola')->first(); //get para obtener varios
    print_r($corola->toArray());


    echo '############# La marca a partir de un modelo ###############'.PHP_EOL;
    $marca2 = $modelos[0]->marca; //tambien $corola->marca   funciona
    print_r($marca2->toArray());


    echo '############# Una marca que traiga embebidos los modelos ###############'.PHP_EOL;
    $marca3 = Marca::where('id',1)->with('modelos')->first();
    print_r($marca3->toArray());


    echo '</pre>';
});

Route::get('/carrito/{id}', function ($id) {
    $carrito = Carrito::with('detalleCarrito.producto')->find($id);

    if (!$carrito) {
        return response()->json(['message' => 'Carrito no encontrado'], 404);
    }

    $total = $carrito->detalleCarrito->sum(function ($detalle) {
        return $detalle->producto->precio * $detalle->cantidad;
    });

    return response()->json([
        'carrito' => $carrito,
        'total' => $total
    ]);
});
