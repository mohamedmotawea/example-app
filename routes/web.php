<?php
use Illuminate\Support\Facades\App;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewStore;
use App\Http\Controllers\products\ProductController;


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

Route::get('/', function () {
    return view('welcome');
});

// Route ::get("home" , function(){
    //  dd(config('app.locale'));

//    App::setlocale('ar') ;
//    dd(config('app.locale'));
//    config(['app.locale' => 'fr']);
//    dd(config('app.locale'));

//     return view('product.allProduct');
//   return "<h1 style='color:red;'>wllcome </h1>" ;

// });

// Route ::get('home' , [NewStore:: class ,'action']);

// Route ::get('mazen' , function(){
//     return view('handle.dark.403');
// });

// Route ::get('products/products' , [ProductController :: class  ,'allProduct']);
// Route ::get('products/update-products' , [ProductController :: class  ,'updateProduct']);
// Route ::get('products/delete-products' , [ProductController :: class  ,'deleteProduct']);
// Route ::get('products/create-products' , [ProductController :: class  ,'addProduct']);

Route ::prefix('products')->controller(ProductController :: class)->group(function() {
    Route ::get('products' ,'allProduct');
    Route ::get('update-products/{myId?}' , 'updateProduct')->where( 'myId' ,'[0-9]+');
    Route ::get('delete-products' , 'deleteProduct');
    Route ::get('create-products' , 'addProduct');



});
