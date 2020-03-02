<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/model', function() {
    //$products  = \App\Product::all();

    //$user = new \App\User();
//    $user = \App\User::find(1);
//    $user->name = 'Administrador';
//    /*$user->email = 'email@teste.com';
//    $user->password = bcrypt('12345678');*/
//
//    $user->save();

    // return $products;
//    return \App\User::all(); //--> Retorna todos os usuários
//    return \App\User::find(3); //--> retorna usuários por id
//    return \App\User::where('name', 'Leilani Kutch')->get(); // --> equivale a: select * from users where name = 'Leilani Kutch'
//    return \App\User::paginate(10); // --> retorna dados paginados

    /* Mass Assignment - Atribuição em massa */

    $user = \App\User::create([
        'name' => 'Samuel Barbosa',
        'email' => 'teste@smkbarbosa',
        'password' => bcrypt('teste')
    ]);

    return \App\User::all();
});

