<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use App\Models\Product;
use App\Models\Supcategory;

class Category extends Model
{
    protected $guarded = [];

    public function products(){
        return $this->hasMany(Product::class);
    }

    public function subcategories(){
        return $this->hasMany(Supcategory::class);
    }
}
