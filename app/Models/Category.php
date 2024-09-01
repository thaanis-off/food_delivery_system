<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Category extends Model
{
    protected $table = 'categories';
    protected $primaryKey = 'id';
    protected $fillable = [
        'name',
        'resturant',
        'title',
        'image',
    ];

    public function food_menus(): BelongsTo
    {
        return $this->belongsTo(FoodMenu::class);
    }
    public function resturant(): BelongsTo
    {
        return $this->belongsTo(Resturant::class);
    }

}