<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Attributes\Fillable;

#[Fillable(['theme', 'lang'])]
class Settings extends Model
{

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
