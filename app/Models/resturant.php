<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\resturants;

class resturant extends Model
{
    
    protected $table = 'resturants';
    protected $primaryKey = 'id';
    protected $fillable = ['name', 'opening_time','closing_time','status','description','image',];
}