<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    protected $fillable = [
        'name',
        'code'
    ];
    // Связь с моделью Order 1:M
    public function orders() {
        return $this->hasMany(Order::class);
    }
}
