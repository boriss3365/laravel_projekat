<?php

namespace App\Models;
use App\Models\Category;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    function category()
    {
        return $this->belongsTo(Category::class);
    }
}
