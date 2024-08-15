<?php

namespace App\Http\Controllers;

use App\Models\foodMenu;
use Illuminate\Http\Request;
use Illuminate\View\View;


class FoodMenuController extends Controller
{
   public function foodMenu(){
      return view('food_delivery.food_menu');
  }

  public function storeFoods(Request $request){
   //dd($request->opening_time);
  $request->validate([
   'name'=>'required',
   'resturant'=>'required',
   'mrp'=>'required',
   'selling_price'=>'required',
   'description'=>'required|max:80',
   'top_dishes'=>'nullable',
   'image'=>'required|mimes:jpeg,webp,jpg,png,gif|max:10000',
  ]);
  
$imageName=time().".".$request->image->extension();
$request->image->move(public_path('food_menu_images'), $imageName);


$food_menus = new foodMenu;
$food_menus->image = $imageName;
$food_menus->name = $request->name;
$food_menus->resturant = $request->resturant;
$food_menus->mrp = $request->mrp;
$food_menus->selling_price = $request->selling_price;
$food_menus->description=$request->description;
$food_menus->top_dishes=$request->top_dishes;
$food_menus->save();
return back()->withSuccess('food added successfull...');
}
}