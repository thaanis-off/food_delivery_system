<?php

use App\Http\Controllers\ResturantController;
use App\Http\Controllers\FoodMenuController;
use Illuminate\Support\Facades\Route;



// user routs--->
Route::get("/",[ResturantController::class, 'index']);

// admin routs--->
Route::get("/admin",[ResturantController::class, 'admin']);
Route::get("/all_orders",[ResturantController::class, 'orders']);
Route::get("/view_details",[ResturantController::class, 'viewDetails']);
Route::get("/all_resturants",[ResturantController::class, 'allResturants']);
Route::get("/update_resturant",[ResturantController::class, 'updateResturant']);    
Route::get("/add_resturant",[ResturantController::class, 'addResturant']);      
Route::get("/edit_menu",[ResturantController::class, 'editMenu']);    
Route::get("/add_menu",[ResturantController::class, 'addMenu']);    
Route::get("/users",[ResturantController::class, 'users']);  
// food menu  
Route::get("/all_menu",[FoodMenuController::class, 'allMenu']);  



Route::post("admin/store",[ResturantController::class, 'store']); 

Route::get("admin/{id}/edit_resturant",[ResturantController::class, 'editResturant']); 

Route::put("admin/{id}/update",[ResturantController::class, 'update']); 

Route::get("admin/{id}/delete",[ResturantController::class, 'destroy']); 


// food_delivery routs--->
Route::get("/resturant",[ResturantController::class, 'resturant']); 


Route::post("admin/storeFoods",[FoodMenuController::class, 'storeFoods']);  