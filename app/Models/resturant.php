<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\foodMenu;
use Illuminate\Database\Eloquent\Relations\HasMany;

class resturant extends Model
{
    
    protected $table = 'resturants';
    protected $primaryKey = 'id';
    protected $fillable = ['name', 'opening_time','closing_time','status','description','image',];

    public function food_menus(): HasMany
    {
        return $this->hasMany(foodMenu::class);
    }
}