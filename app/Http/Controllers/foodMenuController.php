<?php

namespace App\Http\Controllers;

use App\Models\FoodMenu;
use App\Models\Resturant;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;


class FoodMenuController extends Controller
{
//    public function foodMenu(){
//       return view('food_delivery.food_menu');
//   }

 

  public function storeFoods(Request $request){
  
   
   $request->validate([
   'name'=>'required',
   'resturant'=>'required',
   'category'=>'required',
   'mrp'=>'required|numeric',
   'selling_price'=>'required|numeric',
   'description'=>'required|max:80',
   'top_dishes'=>'nullable',
   'image'=>'required|mimes:jpeg,webp,jpg,png,gif|max:10000'
  ]);
  
$imageName=time().".".$request->image->extension();
$request->image->move(public_path('food_menu_images'), $imageName);


$food_menus = new FoodMenu;
$food_menus->image = $imageName;
$food_menus->name = $request->name;
$food_menus->resturant_id = $request->resturant;
$food_menus->category_id = $request->category;
$food_menus->mrp = $request->mrp;
$food_menus->selling_price = $request->selling_price;
$food_menus->description = $request->description;

if($request->top_dishes){
  $food_menus->top_dishes = true;
}else{
  $food_menus->top_dishes = false;
}


$food_menus->save();
return back()->withSuccess('food added successfull...');

}

public function allMenu(){
   $allFoods = FoodMenu::latest()->paginate(6);
   return view('admin.all_menu', ['allFoods'=> $allFoods]);
}

public function editMenu($id){
  $resturants = Resturant::all();
  $food_menus = FoodMenu::where('id',$id)->first();
  return view('admin.edit_menu',['food_menus'=> $food_menus,'resturants'=> $resturants]); 
} 


public function updateMenu (Request $request, $id){

  $food_menus = FoodMenu::find($id)->first();
  if ($request->hasFile('image')) 
  {
    $path = (public_path('food_menu_images')).$food_menus->image;
    if (File::exists($path)) 
    {
     File::delete($path);
    }

    $file = $request->file('image');
    $ext = $file->getClientOriginalExtension();
    $filename = time().'.'.$ext;
    $file->move(public_path('food_menu_images'),$filename);
    $food_menus->image = $filename;
  }

  $food_menus->name = $request->name;
  $food_menus->resturant_id = $request->resturant;
  $food_menus->category_id = $request->category_id;
  $food_menus->mrp = $request->mrp;
  $food_menus->selling_price = $request->selling_price;
  $food_menus->description = $request->description;
  if($request->top_dishes){
      $food_menus->top_dishes = true;
  }else{
    $food_menus->top_dishes = false;
  }
  
  $food_menus->update();
  return redirect('/all-menu')->withSuccess('Food updated successfull...');
}

// public function updateMenu(Request $request ,$id){
//   $request->validate([
//     'name'=>'required',
//     'resturant'=>'required',
//     'category'=>'required',
//     'mrp'=>'required|numeric',
//     'selling_price'=>'required|numeric',
//     'description'=>'required|max:80',
//     'top_dishes'=>'nullable',
//     'image'=>'nullable|mimes:jpeg,webp,jpg,png,gif|max:10000'
//    ]);

//    $food_menus = FoodMenu::where('id',$id)->first();
   


   
//    if (isset($request->image)) {
//     $foodImageName=time().".".$request->image->extension();
//     $request->image->move(public_path('food_menu_images'), $foodImageName);
//     //Storage::disk('image')->delete(public_path('food_menu_images'));
//     $food_menus->image = $foodImageName;
//    }

   

//     $food_menus->name = $request->name;
//     $food_menus->resturant_id = $request->resturant;
//     $food_menus->category_id = $request->category_id;
//     $food_menus->mrp = $request->mrp;
//     $food_menus->selling_price = $request->selling_price;
//     $food_menus->description = $request->description;
//     if($request->top_dishes){
//       $food_menus->top_dishes = true;
//     }else{
//     $food_menus->top_dishes = false;
//     }

//     $food_menus->save();
//     return redirect('/all-menu')->withSuccess('Food updated successfull...');
//   }

  public function destroyFoodMenu($id){
    $food_menus = foodMenu::where('id',$id)->first();
    $food_menus->delete();  
    return back()->withSuccess('food Deleted Successfull...');
    
    
} 


public function getFoodmenus(Request $request){

  //dd('reached');
  $food_menus = DB::table("food_menus")->where("resturant_id",$request->resturant_id);

  return json_encode($food_menus);
}

}