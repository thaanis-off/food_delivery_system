<?php

namespace App\Http\Controllers;

use App\Models\foodMenu;
use Illuminate\Http\Request;
use Illuminate\View\View;


class foodMenuController extends Controller
{
   public function foodMenu(){
      return view('food_delivery.food_menu');
  }
}