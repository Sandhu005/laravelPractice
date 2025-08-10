<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

       protected $fillable = [
        'categoryId',
        'name',
        'duration',
        'fee',
        'image',
        'description',
        'status',
    ];

     public function category()
    {
        return $this->hasOne("App\Models\Category", "id", "categoryId");
    }
}
