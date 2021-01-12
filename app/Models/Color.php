<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use App\Models\Product;

class Color extends Model
{
    protected $guarded = [];

    public function products(){
        return $this->belongsToMany(Product::class,'color_products');
    }
}
