<?php

namespace App\Http\Controllers;

use App\Models\resturant;
use Illuminate\Http\Request;
use Illuminate\View\View;

class food_component extends Controller
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
    public function addResturant(){
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
            'image'=>'nullable|mimes:jpeg,webp,jpg,png,gif|max:10000',
           ]);
           $resturants = resturant::where('id',$id)->first();

           if (isset($request->image)) {
            $imageName=time().".".$request->image->extension();
            $request->image->move(public_path('all_images'), $imageName);
            $resturants->image = $imageName;
           }

           $resturants->name = $request->name;
           $resturants->opening_time = $request->opening_time;
           $resturants->closing_time = $request->closing_time;
           $resturants->status = $request->status;
           $resturants->description=$request->description;
           $resturants->save();
           return redirect('/all_resturants')->withSuccess('Resturant updated successfull...');
    } 
    
    public function destroy($id){
        $resturants = resturant::where('id',$id)->first();
        $resturants->delete();
        return back()->withSuccess('Resturant Deleted Successfull...');
    } 

    public function allMenu(){
        return view('admin.all_menu');
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
        //dd($request->opening_time);
       $request->validate([
        'name'=>'required',
        'opening_time'=>'required',
        'closing_time'=>'required',
        'status'=>'required',
        'description'=>'required|max:105',
        'image'=>'required|mimes:jpeg,webp,jpg,png,gif|max:10000',
       ]);
       
    $imageName=time().".".$request->image->extension();
    $request->image->move(public_path('all_images'), $imageName);
    

    $product = new resturant;
    $product->image = $imageName;
    $product->name = $request->name;
    $product->opening_time = $request->opening_time;
    $product->closing_time = $request->closing_time;
    $product->status = $request->status;
    $product->description=$request->description;
    $product->save();
    return back()->withSuccess('Resturant added successfull...');
    }

     // food_delivery function
     public function resturant(){
        $resturants = resturant::all();
        return view('food_delivery.resturant', ['resturants'=> $resturants]);
    }

    
    
}