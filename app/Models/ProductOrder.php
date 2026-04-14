<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Attributes\Fillable;

#[Fillable(['name', 'price'])]
class ProductOrder extends Model
{
    public function order()
    {
        return $this->morphOne(Order::class, 'orderable');
    }
}
