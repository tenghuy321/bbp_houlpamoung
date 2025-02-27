<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    protected $primaryKey = 'id';

    protected $fillable = [
        'name',
        'code',
        'price',
        'description',
        'category_id',
        'image',
    ];

    public function category(){
        return $this->belongsTo(Category::class,'category_id');
    }
}
