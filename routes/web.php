<?php

use Illuminate\Support\Facades\Route;

/*Extraemos al controlador*/
use App\Http\Controllers\QuienesSomosController; /*Viene del controlador*/
use App\Http\Controllers\ContactoController; /*Viene del controlador*/
use App\Http\Controllers\ServiciosController; /*Viene del controlador*/



Route::get('producto', function () {
    return "Bienvenidos al apartado de producto";
});

Route::get('ventas', function () {
    return "Bienvenidos al apartado de ventas";
});

Route::get('cliente', function () {
    return "Bienvenidos al apartado de clientes";
});
Route::get('proveedor', function () {
    return "Bienvenidos al apartado de proveedores";
});
//rutas con parametros
Route::get('producto/{producto}', function ($producto) {
    return "Bienvenidos al apartado de producto: $producto";
});
Route::get('ventas/{ventas}', function ($ventas) {
    return "Bienvenidos al apartado de ventas: $ventas";
});
Route::get('cliente/{clientes}', function ($clientes) {
    return "Bienvenidos al apartado de clientes: $clientes";
});
Route::get('proveedor/{proveedor}', function ($proveedor,) {
    return "Bienvenidos al apartado de proveedores: $proveedor";
    });

//rutas con parametros multiples
Route::get('cliente/{cliente}/{Dni}', function ($cliente, $Dni) {
    return "Bienvenidos al apartado de clientes: $cliente donde el DNI es: $Dni";
    });
Route::get('proveedor/{proveedor}/{verduras}', function ($proveedor, $verduras) {
    return "Bienvenidos al apartado de proveedores: $proveedor que vende las Verduras: $verduras";
    });
    Route::get('producto/{producto}/{precio}', function ($producto, $precio) {
    return "Bienvenidos al apartado de producto: $producto con precio: $precio";
});
Route::get('ventas/{ventas}/{detalleVenta}', function ($ventas, $detalleVenta) {
    return "Bienvenidos al apartado de ventas: $ventas con detalle: $detalleVenta";
});