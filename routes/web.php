<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\BykeController;
use App\Http\Controllers\PurchaseController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\SaleController;
use App\Http\Controllers\ConsultaController;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
})->name('inicio');

Auth::routes();

// Ruta Home (Dashboard) - Acceso para todos los roles
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])
    ->name('home')
    ->middleware(['auth', 'role:Administrador|Vendedor|Cliente']);

// Rutas accesibles solo para Administrador y Vendedor
Route::middleware(['auth', 'role:Administrador|Vendedor'])->group(function () {
    // Rutas Proveedores (Supplier)
    Route::resource('supplier', SupplierController::class);

    // Rutas Categorías (Category)
    Route::resource('category', CategoryController::class);

    // Rutas Clientes (Customers)
    Route::resource('customer', CustomerController::class);

    // Rutas Bicicletas (Byke)
    Route::get('/byke', [BykeController::class, 'index'])->name('byke.index');
    Route::get('/byke/{id}', [BykeController::class, 'show'])->name('byke.show');

    // Rutas Compras (Purchases)
    Route::resource('purchase', PurchaseController::class);

    // Rutas Ventas (Sales)
    Route::resource('sale', SaleController::class);

    // Ruta Generar PDF
    Route::get('/sale/{id}/pdf', [SaleController::class, 'generatePDF'])->name('sale.pdf');

    // Rutas Consultas
    Route::prefix('consultas')->group(function () {
        Route::get('/customer', [ConsultaController::class, 'porCustomer'])->name('consultas.customer');
        Route::get('/producto', [ConsultaController::class, 'porProducto'])->name('consultas.producto');
        Route::get('/fecha', [ConsultaController::class, 'porFecha'])->name('consultas.fecha');
        Route::get('/cliente', [ConsultaController::class, 'consultaPorCliente'])->name('consultas.cliente');
        Route::post('/cliente', [ConsultaController::class, 'mostrarConsultaPorCliente'])->name('consultas.cliente.mostrar');
        Route::get('/bicicleta', [ConsultaController::class, 'consultaPorBicicleta'])->name('consultas.bicicleta');
        Route::post('/bicicleta', [ConsultaController::class, 'mostrarConsultaPorBicicleta'])->name('consultas.bicicleta.mostrar');
        // Aquí puedes decidir si necesitas ambas rutas para fecha
        Route::get('/fecha', [ConsultaController::class, 'consultaPorFecha'])->name('consultas.fecha'); 
        Route::post('/fecha', [ConsultaController::class, 'mostrarConsultaPorFecha'])->name('consultas.fecha.mostrar'); 
    });
});

// Rutas Usuarios (Users) - Exclusivas para Administrador
Route::middleware(['auth', 'role:Administrador'])->group(function () {
    Route::resource('users', UserController::class);
});
