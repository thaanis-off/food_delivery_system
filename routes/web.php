<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ResturantController;
use App\Http\Controllers\FoodMenuController;
use Illuminate\Support\Facades\Route;



// index routs--->
Route::get("/",[ResturantController::class, 'index']);

// admin view routs --->
Route::get("/admin",[ResturantController::class, 'admin']);
Route::get("/all-orders",[ResturantController::class, 'orders'])->name('allOrdersView');
Route::get("/view-details",[ResturantController::class, 'viewDetails'])->name('viewDetailsView');
Route::get("/all-resturants",[ResturantController::class, 'allResturants'])->name('allResturantsView');
Route::get("/update_resturant",[ResturantController::class, 'updateResturant']);    
Route::get("/add-resturants",[ResturantController::class, 'addResturants'])->name('addResturantsView');      
Route::get("/edit-menu",[ResturantController::class, 'editMenu'])->name('editMenuView');    
Route::get("/add-menu",[ResturantController::class, 'addMenu'])->name('addMenuview');    
Route::get("/users",[ResturantController::class, 'users']);  
    
// food menu  
Route::get("/all-menu",[FoodMenuController::class, 'allMenu'])->name('allMenuView');  
Route::get("/add-category",[CategoryController::class, 'addCatgry'])->name('addCategoryView');  



Route::post("admin/store",[ResturantController::class, 'store']); 

Route::get("admin/{id}/edit_resturant",[ResturantController::class, 'editResturant']); 

Route::put("admin/{id}/update",[ResturantController::class, 'update']); 

Route::get("admin/{id}/delete",[ResturantController::class, 'destroy']); 


// food_delivery routs--->
Route::get("/resturants",[ResturantController::class, 'Resturants'])->name('resturantsView');
Route::get("/resturant/{id}",[ResturantController::class, 'resturantShow'])->name('resturantview'); 


Route::post("admin/storeFoods",[FoodMenuController::class, 'storeFoods']);

Route::get("admin/{id}/edit_menu",[FoodMenuController::class, 'editMenu']); 

Route::put("admin/{id}/updateMenu",[FoodMenuController::class, 'updateMenu']);

Route::post("admin/storeCategory",[CategoryController::class, 'storeCategory']);  

Route::get("admin/getCategoriesList",[CategoryController::class, 'getCategoriesList']);  