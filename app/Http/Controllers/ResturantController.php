<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\foodMenu;
use App\Models\Resturant;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ResturantController extends Controller
{
    
    // user function 
    public function index(){
        return view('food_delivery.index');
    }
    
    
    // admin function
    public function admin(){
        return view('admin.admin_index');
    }
    public function orders(){
        return view('admin.all_orders');
    }
    public function viewDetails(){
        return view('admin.view_details');
    }
    public function allResturants(){
        $resturants = resturant::latest()->paginate(5);
        return view('admin.all_resturants', ['resturants'=> $resturants]);
    }
    public function updateResturant(){
        return view('admin.update_resturant');
    }
    public function addResturants(){
        return view('admin.add_resturant');
    }
    
    public function editResturant($id){
        $resturants = resturant::where('id',$id)->first();
        return view('admin.edit_resturant',['resturants'=> $resturants]); 
    } 
    
    public function update(Request $request ,$id){
            $request->validate([
            'name'=>'required',
            'opening_time'=>'required',
            'closing_time'=>'required',
            'status'=>'required',
            'description'=>'required|max:105',
            'title'=>'required|max:80',
            'image'=>'nullable|mimes:jpeg,webp,jpg,png,gif|max:10000',
            'rest_banner_image'=>'nullable|mimes:jpeg,webp,jpg,png,gif|max:10000'
           ]);
           $resturants = Resturant::where('id',$id)->first();

           if (isset($request->image)) {
            $imageName=time().".".$request->image->extension();
            $request->image->move(public_path('all_images'), $imageName);
            $resturants->image = $imageName;
           }

           if (isset($request->rest_banner_image)) {
            $RestimageName=time().".".$request->rest_banner_image->extension();
            $request->rest_banner_image->move(public_path('all_images'), $RestimageName);
            $resturants->rest_banner_image = $RestimageName;
           }

          

           $resturants->name = $request->name;
           $resturants->opening_time = $request->opening_time;
           $resturants->closing_time = $request->closing_time;
           $resturants->status = $request->status;
           $resturants->description=$request->description;
           $resturants->title= $request-> title;
           $resturants->save();
           return redirect('/all-resturants')->withSuccess('Resturant updated successfull...');
    } 
    
    public function destroy($id){
        $resturants = Resturant::where('id',$id)->first();
        $resturants->food_menus()->delete();    
        $resturants->categories()->delete();    
        $resturants->delete();
        return back()->withSuccess('Resturant Deleted Successfull...');
    } 

  
    public function editmenu(){
        return view('admin.edit_menu');
    }
    public function addmenu(){
        $resturants = resturant::all();
      
        return view('admin.add_menu')->with('resturants', $resturants);
       
    }
    public function users(){
        return view('admin.users');
    }

    public function store(Request $request){
        //dd($request->resturant_banner_image,$request->image);
        $request->validate([
        'name'=>'required',
        'opening_time'=>'required',
        'closing_time'=>'required',
        'status'=>'required',
        'description'=>'required|max:105',
        'title'=>'required|max:200',
        'image'=>'required|mimes:jpeg,webp,jpg,png,gif|max:10000',
        'resturant_banner_image'=>'required|mimes:jpeg,webp,jpg,png,gif|max:10000'
       ]);
       
    $imageName=time().".".$request->image->extension();
    $request->image->move(public_path('all_images'), $imageName);

    $RestimageName=time().".".$request->resturant_banner_image->extension();
    $request->resturant_banner_image->move(public_path('all_images'), $RestimageName);
    

    $product = new resturant;
    $product->image = $imageName;
    $product->resturant_banner_image = $RestimageName;
    $product->name = $request->name;
    $product->opening_time = $request->opening_time;
    $product->closing_time = $request->closing_time;
    $product->status = $request->status;
    $product->description=$request->description;
    $product->title=$request->title;
    $product->save();
    return back()->withSuccess('Resturant added successfull...');
    }

     // food_delivery function
    public function Resturants(){
        $resturants = Resturant::all();
        return view('food_delivery.resturants', ['resturants'=> $resturants]);
    }

    public function resturantShow(string $id): View
    {   
        return view('food_delivery.resturantShow', [
            'resturant' => Resturant::findOrFail($id),
            'categories' => Resturant::findOrFail($id)->categories,
            'food_menus' => Resturant::findOrFail($id)->food_menus
        ]);
    }

    
    
}