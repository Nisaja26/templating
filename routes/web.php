<?php

use App\Http\Controllers\AdminUsercontroller;
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

// Route::get('template', function () {
//     return view('template');
// });


// Route::get('/', function () {
//     return view('admin.layouts.wrapper');
// });


Route::get('/', function () {
    $data = [
     'content' => 'admin.dashboard.index'
    ];
    return view('admin.layouts.wrapper', $data);
 });

Route::prefix('/admin')->group(function () {
    Route::resource('/user', AdminUserController::class);
});




// Route::get('/post', function () {
//     $data = [
//         'content' => 'admin.post.index' 
//     ];
//     return view('admin.layouts.wrapper', $data);
// });



