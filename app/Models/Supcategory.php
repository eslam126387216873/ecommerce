<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use App\Models\Category;


class Supcategory extends Model
{
    protected $guarded = [];

    public function category(){
        return $this->belongsTo(Category::class);
    }
}
