<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Resturant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        'image'=>'required|mimes:jpeg,webp,jpg,png,gif|max:10000'
       ]);

        $catImage=time().".".$request->image->extension();
        $request->image->move(public_path('category_images'), $catImage);

        $category = new Category;
        $category->image = $catImage;
        $category->name = $request->name;
        $category->resturant_id = $request->resturant;
        $category->save();
        return back()->withSuccess('Category added successfull...');
    }
    public function getCategoriesList(Request $request){

        //dd('reached');
        $categories = DB::table("categories")->where("resturant_id",$request->resturant_id)->pluck("name","id");

        return json_encode($categories);
    }
}