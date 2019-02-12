<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function category() {
        return $this->belongsTo(Category::class);
    }

    public function reviews() {
        return $this->hasMany(Review::class);
    }

    public function user() {
        $this->belongsTo(User::class);
    }

    public function rate() {
        return $this->reviews()->sum('rate');
    }
}
