<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

use App\Models\Complaint;
use App\Models\Cart;
use App\Models\Rating;
use App\Models\Product;
use App\Models\Order;
use App\Models\Comment;

class User extends Authenticatable
{
    use Notifiable;

    public function products(){
        return $this->hasMany(Product::class);
    }

    public function orders(){
        return $this->hasMany(Order::class);
    }

    public function comments(){
        return $this->hasMany(Comment::class);
    }

    public function complaints(){
        return $this->hasMany(Complaint::class);
    }

    public function carts(){
        return $this->hasMany(Cart::class);
    }

    public function ratings(){
        return $this->hasMany(Rating::class);
    }

    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','phone','role','image',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
