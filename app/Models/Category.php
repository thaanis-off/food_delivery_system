<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

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

    public function food_menus(): HasMany
    {
        return $this->HasMany(FoodMenu::class);
    }
    public function resturant(): BelongsTo
    {
        return $this->belongsTo(Resturant::class);
    }

}