<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use App\Models\Product;

class Size extends Model
{
    protected $guarded = [];

    public function products(){
        return $this->belongsToMany(Product::class,'size_products');
    }
}
