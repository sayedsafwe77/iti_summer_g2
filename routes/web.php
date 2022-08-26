<?php

use App\Models\Category;
use App\Models\Order;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Route;

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

// middleware
Route::get('/', function () {
    return view('main');
});
Route::get('/home', function () {
    return view('main');
});
Route::get('/profile', function () {
    return view('profile');
});

Auth::routes(['verify' => true]);

Route::get('/route1',function(){
    if(!Gate::allows('admin')){
        abort(403);
    }
    // authorization  Gates Polices
    // layout
    // composer.json
    // pasckage.json
    // vendor
    // api
    // request
    // resource
    return 'welcome from route 1';
})->middleware('auth');

Route::get('/route2',function(){
    $users = User::take(5)->get();
    return view('user.index',compact('users'));
});

Route::get('/category',[App\Http\Controllers\CategoryController::class,'index'])->name('category.index');

Route::get('/category/show/{id}',[App\Http\Controllers\CategoryController::class,'show']);


// crud
// read     get
// create   post
// update   put
// delete   delete

// get form for update
// update

Route::get('/category/edit/{id}',[App\Http\Controllers\CategoryController::class,'edit'])->name('category.edit');
Route::get('/category/create',[App\Http\Controllers\CategoryController::class,'create'])->name('category.create');
Route::post('/category/store',[App\Http\Controllers\CategoryController::class,'store'])->name('category.store');


Route::put('/category/update/{id}',[App\Http\Controllers\CategoryController::class,'update'])->name('category.update');

// form
// create
Route::delete('/category/delete/{id}',
[App\Http\Controllers\CategoryController::class,
'destroy'])->name('category.destroy');


Route::resource('product','\App\Http\Controllers\ProductController');

Route::get('/order',function(){
    $orders = Order::whereIn('id',[15,16,17,18,19])->get();
    return view('order.index',compact('orders'));
});
Route::get('/order2',function(){
    $orders = Order::get();
    foreach($orders as $order){
        dump($order->user);
        dump($order->products);
    }
});
Route::get('/user',function(){
    $users = User::take(5)->get();
    dd($users->last()->orders);
});



// Authentication
// Aut



// Route::get('/products',[\App\Http\Controllers\ProductController::class,'index'])->name('product.index');
// Route::get('/products/show/{product}',[\App\Http\Controllers\ProductController::class,'show'])->name('product.show');

// Route::get('/products/create',[\App\Http\Controllers\ProductController::class,'create'])->name('product.create');

// Route::post('/products',[\App\Http\Controllers\ProductController::class,'store'])->name('product.store');

// Route::get('/products/{product}',[\App\Http\Controllers\ProductController::class,'edit'])->name('product.edit');

// Route::put('/products/{product}',[\App\Http\Controllers\ProductController::class,'update'])->name('product.update');

// Route::delete('/products/{product}',[\App\Http\Controllers\ProductController::class,'destroy'])->name('products.destroy');
