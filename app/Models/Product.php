<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'price', 'category_id', 'img', 'description'];


    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function scopNewProducts($query, $limit){
        return $query->orderBy('id', 'desc')->limit($limit)->with(['category']);
    }

    public function scopeBestsellerProducts($query, $limit){
        return $query->where('sold', '>', 0)->orderBy('id', 'desc')->limit($limit)->with(['category']);
    }

    public function scopeInstockProducts($query, $limit){
        return $query->where('quantily', '>', 0)->orderBy('id', 'desc')->limit($limit)->with(['category']);
    }
}
