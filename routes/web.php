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

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/home', function () {
//     $menus = ["Home", "Product", "Category", "Blog"];
//     $title = "Awesome App";
//     $purchasedItems = ["Book", "Pencil", "Erasser"];
//     return view("front-end/home", compact("menus", "title", "purchasedItems"));
// });

Route::get("/home", function() {
    $menus = ["Home", "Product", "Category", "Blog"];
    $title = "Awesome App";
    $purchasedItems = ["Book", "Pencil", "Eraser"];
    $favoriteItems = ["Calculator", "Bag"];

    //return view("frontend.home", compact("menus", "title", "purchasedItems"));
    return view("front-end.home", ["menus" => $menus, "title" => $title, "purchasedItems" => $purchasedItems, "favoriteItems" => $favoriteItems]);
});


