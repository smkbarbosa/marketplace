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

//    $user = \App\User::create([
//        'name' => 'Samuel Barbosa',
//        'email' => 'teste@smkbarbosa',
//        'password' => bcrypt('teste')
//    ]);
    //Como pegaria a loja de um usuário

//    $user = \App\User::find(4);
//
//    $user->stores; //1-1 - retorna o objeto  unico, se for n-n retorna o collection de dados (objeto)

//    $loja = \App\Store::find(9);
//    return $loja->products()->count();
//    return $loja->products()->where('id', 9)->get();

    // pegando as lojas de uma categoria
//    $categoria = \App\Category::find(1);
//    $categoria->products;


    // Criar uma loja para um usuário
//    $user = \App\User::find(10);
//    $user->store()->create([
//        'name' => 'Loja Teste',
//        'description' => 'Loja Teste de Produtos de Informática',
//        'mobile_phone' => 'xx xxxxx-xxxx',
//        'phone' => 'xx xxxx-xxxx',
//        'slug' => 'loja-teste',
//    ]);

    // criar um produto para uma loja
//    $store =\App\Store::find(1);
//    $store->products()->create([
//        'name' => 'Notebook Dell',
//        'description' => 'CORE I5 16GB',
//        'body' => 'Qualquer coisa a mais...',
//        'price' => 2999.90,
//        'slug' => 'notebook-dell'
//    ]);

    // criar uma categoria
//    \App\Category::create([
//       'name' => 'Games',
//       'description' => null,
//        'slug' => 'games'
//    ]);
//    \App\Category::create([
//           'name' => 'Notebooks',
//           'description' => null,
//            'slug' => 'notebooks'
//    ]);
//
//    return \App\Category::all();

    // add produto para uma categoria
//    $product = \App\Product::find(1);
//    $product->categories()->sync([2]);

    return \App\Product::find(1);
});

