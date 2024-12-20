<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name'];

    // Связь с моделью Product 1:M
    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
