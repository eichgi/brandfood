<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    protected $fillable = ['name', 'description'];

    public function order()
    {
        return $this->hasOne(Order::class);
    }
}
