<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductLog extends Model
{
    use HasFactory;
    protected $fillable = [
        'product_id',
        'name',
        'name_old',
        'user_id',
    ];

    public function user()
    {
       return $this->belongsTo(user::class,'user_id', 'id');
    }
}
