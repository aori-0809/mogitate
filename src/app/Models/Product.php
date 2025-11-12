<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public function season(){
        return $this -> belongsToMany(Season::class,'products_seasons')->withTimestamps();
    }

    public function scopeKeywordSearch($query ,$keyword)
    {
        if ($keyword) {
            return $query->where('name', 'LIKE', "%{$keyword}%");
        }
        return $query;
    }
}
