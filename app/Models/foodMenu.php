<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Resturant;

class foodMenu extends Model
{
    use HasFactory;


    public function resturants(): BelongsTo
    {
        return $this->belongsTo(Resturant::class);
    }
}