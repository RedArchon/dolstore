<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $guarded = [];

    public function path()
    {
        return route('products.show', $this);
    }
    public function categories()
    {
        return $this->belongsToMany(Category::class)->withTimestamps();
    }
}
