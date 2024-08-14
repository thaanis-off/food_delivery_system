<?php

use App\Http\Controllers\food_component;
use App\Http\Controllers\foodMenuController;
use Illuminate\Support\Facades\Route;



// user routs--->
Route::get("/",[food_component::class, 'index']);

// admin routs--->
Route::get("/admin",[food_component::class, 'admin']);
Route::get("/all_orders",[food_component::class, 'orders']);
Route::get("/view_details",[food_component::class, 'viewDetails']);
Route::get("/all_resturants",[food_component::class, 'allResturants']);
Route::get("/update_resturant",[food_component::class, 'updateResturant']);    
Route::get("/add_resturant",[food_component::class, 'addResturant']);    
Route::get("/all_menu",[food_component::class, 'allMenu']);    
Route::get("/edit_menu",[food_component::class, 'editMenu']);    
Route::get("/add_menu",[food_component::class, 'addMenu']);    
Route::get("/users",[food_component::class, 'users']);    



Route::post("admin/store",[food_component::class, 'store']); 

Route::get("admin/{id}/edit_resturant",[food_component::class, 'editResturant']); 

Route::put("admin/{id}/update",[food_component::class, 'update']); 

Route::get("admin/{id}/delete",[food_component::class, 'destroy']); 


// food_delivery routs--->
Route::get("/resturant",[food_component::class, 'resturant']); 
Route::get("/food-menu",[foodMenuController::class, 'foodMenu']); 