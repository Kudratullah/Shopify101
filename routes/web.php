<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//Route::get('/', function () {
//    return view('welcome');
//})->middleware(['verify.shopify'])->name('home');

Route::get( '/', [
    \App\Http\Controllers\Welcome::class,
    'index'
] )->middleware( [ 'verify.shopify' ] )->name( 'home' );

// Collections
Route::prefix( 'collection' )
     //->controller( \App\Http\Controllers\Collection::class )
     ->name( 'collections.' )
     ->middleware( [ 'verify.shopify' ] )
     ->group( function () {
         Route::get( '/', [
             \App\Http\Controllers\Collection::class,
             'index'
         ] )->middleware( [ 'verify.shopify' ] )->name( 'index' );
         Route::get( '/add', [
             \App\Http\Controllers\Collection::class,
             'add'
         ] )->middleware( [ 'verify.shopify' ] )->name( 'add' );
         Route::post( '/save', [
             \App\Http\Controllers\Collection::class,
             'save'
         ] )->middleware( [ 'verify.shopify' ] )->name( 'save' );
         Route::get( 'edit/{collectionId}', [
             \App\Http\Controllers\Collection::class,
             'edit'
         ] )->middleware( [ 'verify.shopify' ] )->name( 'edit' );
         Route::post( '/update/{collectionId}', [
             \App\Http\Controllers\Collection::class,
             'update'
         ] )->middleware( [ 'verify.shopify' ] )->name( 'update' );
         Route::get( '/delete/{collectionId}', [
             \App\Http\Controllers\Collection::class,
             'delete'
         ] )->middleware( [ 'verify.shopify' ] )->name( 'delete' );
     } );

// Products
Route::prefix( 'product' )
     //->controller( \App\Http\Controllers\Product::class )
     ->name( 'products.' )
     ->middleware( [ 'verify.shopify' ] )
     ->group( function () {
         Route::get( '/{collectionId?}', [
             \App\Http\Controllers\Product::class,
             'index'
         ] )->middleware( [ 'verify.shopify' ] )->name( 'index' );
         Route::get( '/add/{collectionId?}', [
             \App\Http\Controllers\Product::class,
             'add'
         ] )->middleware( [ 'verify.shopify' ] )->name( 'add' );
         Route::post( '/save', [
             \App\Http\Controllers\Product::class,
             'save'
         ] )->middleware( [ 'verify.shopify' ] )->name( 'save' );
         Route::get( 'edit/{productId}', [
             \App\Http\Controllers\Product::class,
             'edit'
         ] )->middleware( [ 'verify.shopify' ] )->name( 'edit' );
         Route::post( '/update/{productId}', [
             \App\Http\Controllers\Product::class,
             'update'
         ] )->middleware( [ 'verify.shopify' ] )->name( 'update' );
         Route::get( '/delete/{productId}', [
             \App\Http\Controllers\Product::class,
             'delete'
         ] )->middleware( [ 'verify.shopify' ] )->name( 'delete' );
     } );
