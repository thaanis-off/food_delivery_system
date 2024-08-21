<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Resturant;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    public function addCatgry(){
        $resturants = Resturant::all();
        return view('admin.add_category')->with('resturants', $resturants);
    }

    public function storeCategory(Request $request){
        //dd($request->resturant);
        $request->validate([
        'name'=>'required',
        'resturant'=>'required',
        'title'=>'required|max:80',
        'image'=>'required|mimes:jpeg,webp,jpg,png,gif|max:10000'
       ]);

        $catImage=time().".".$request->image->extension();
        $request->image->move(public_path('food_menu_images'), $catImage);

        $category = new Category;
        $category->image = $catImage;
        $category->name = $request->name;
        $category->resturants_id = $request->resturant;
        $category->title = $request->title;
        $category->save();
        return back()->withSuccess('Category added successfull...');
}
}