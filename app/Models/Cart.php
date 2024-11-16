<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $fillable = [
        'quantity',
        'product_id',
        'user_id',
    ];

    // Связь с таблицей Product M:1
    public function product() {
        return $this->belongsTo(Product::class);
    }
    // Связь с моделью User M:1
    public function user() {
        return $this->belongsTo(User::class);
    }
}
