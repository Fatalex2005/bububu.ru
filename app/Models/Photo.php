<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    protected $fillable = [
        'path',
        'product_id',
    ];
    // Связь с моделью Product M:1
    public function product() {
        return $this->belongsTo(Product::class);
    }
}
