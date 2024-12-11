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









// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/empresa', function () {
//     return view('empresa');
// });

// Route::view('/empresa', 'empresa');

// ----Agrupando usando rotas----
// Route::group(['prefix'=>'admin', 'as' => 'admin.']function(){
//     Route::get('exemple0', function(){
//         return "exemple0";
//     });
//     Route::get('exemple01', function(){
//         return "exemple 01";     
//     });
//     Route::get('exemple02', function(){
//         return "exemple 02";
        
//     });
// });

/*  -- Exemplo de Rotas --
Route::any('/any', function(){
    return "Permite todo tipo de acesso http (put, delete,get,post)";
});

Route::match(['get','post'] ,'/match', function(){
    return "permite apenas acessos definidos ";
});
*/

// --  Passando parametros pela uri  --
// Route::get('/produto/{id}', function($id){
//     return "O id do produto é ".$id;
// });


