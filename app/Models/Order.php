<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'comment',
        'payment',
        'user_id',
        'status_id',
    ];
    // Связь с моделью User M:1
    public function user() {
        return $this->belongsTo(User::class);
    }
    // Связь с моделью User M:1
    public function status() {
        return $this->belongsTo(Status::class);
    }
    // Связь с моделью Item 1:M
    public function items() {
        return $this->hasMany(Item::class);
    }
}
